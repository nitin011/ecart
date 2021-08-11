<?php

namespace App\Repositories\Admin;

use App\Events\WelcomeAdminUser;
use App\Interfaces\Admin\AdminUserInterface;
use App\Interfaces\ImageInterface;
use App\Models\Admin;
use App\Models\PasswordResets;
use App\Repositories\ImageRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class AdminUserRepository implements AdminUserInterface
{
    protected $imageRepository;

    public function getAll()
    {
        $data = Admin::query()->latest()->get();
        return DataTables::of($data)
            ->addColumn('name', function ($data) {
                return $data->name;
            })
            ->addColumn('action', function ($data) {
                return view('admin.admin.partials.action', compact('data'));
            })
            ->rawColumns(['name', 'action'])
            ->make(true);
    }

    public function store($data)
    {
        $data['password'] = Str::random(6);
        $response = Admin::query()->create($data);
        return ['status' => true, 'response' => $response, 'password' => $data['password']];
    }

    public function update($data, $id)
    {
        $product = Admin::query()->findOrFail($id);
        return $product->update($data);
    }

    public function sendWelcomeMail($data, $password)
    {
        $token = $random = Str::random();
        $reset_data = array('email' => $data['email'], 'password' => $password, 'created_at' => date('Y-m-d'), 'token' => $token);
        $isEmailExist = PasswordResets::query()->where('email', '=', $data['email'])->exists();
        if ($isEmailExist) {
            PasswordResets::query()->where('email', '=', $data['email'])->update(['created_at' => date('Y-m-d'), 'token' => $token]);
        } else {
            PasswordResets::query()->create(['email' => $data['email'], 'created_at' => date('Y-m-d'), 'token' => $token]);
        }
        $reset_data['name'] = $data['first_name'] . ' ' . (isset($data['last_name']) ? $data['last_name'] : '');
        $reset_data['reset_link'] = route('admin.password.reset', $token);
        event(new WelcomeAdminUser($reset_data));
        return true;
    }

    public function getById($id)
    {
        return Admin::query()->findOrFail($id);
    }

    public function delete($id)
    {
        return Admin::query()->findOrFail($id)->delete();
    }
}
