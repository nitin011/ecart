<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdminUserRequest;
use App\Http\Requests\Admin\UpdateAdminUserRequest;
use App\Interfaces\Admin\AdminUserInterface;
use App\Interfaces\ImageInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    protected $adminRepository, $imageRepository;

    public function __construct(AdminUserInterface $adminRepository, ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
        $this->adminRepository = $adminRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->adminRepository->getAll();
        }
        return view('admin.admin.index');
    }


    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(StoreAdminUserRequest $request)
    {
        try {
            $res = $this->adminRepository->store($request->all());
            if ($res['status'] == true && $this->adminRepository->sendWelcomeMail($request, $res['password'])) {
                $response = redirect()->route('admin.admins.index')->with('success', 'New user Added Successfully. Email sent to user.');
            } else {
                throw new \Exception('Mail not sent to user.');
            }
        } catch (\Exception $e) {
            $response = redirect()->route('admin.admins.index')->with('error', $e->getMessage());
        }
        return $response;
    }

    public function show($id)
    {
        $admin = $this->adminRepository->getById($id);
        return view('admin.admin.show', compact('admin'));
    }

    public function edit($id)
    {
        $user = $this->adminRepository->getById($id);
        return view('admin.admin.edit', compact('user'));
    }

    public function update(UpdateAdminUserRequest $request, $id): RedirectResponse
    {
        $this->adminRepository->update($request->all(), $id);
        return redirect()->route('admin.admins.index')->with('success', 'Admin Updated Successfully!');
    }

    public function destroy($id): RedirectResponse
    {
        $this->adminRepository->delete($id);
        return redirect()->route('admin.admins.index')->with('success', 'Admin User Deleted Successfully!');
    }
}
