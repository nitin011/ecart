<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\PageInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $pageRepository;

    public function __construct(PageInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index()
    {
        $pages = $this->pageRepository->getAll();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $this->pageRepository->store($request->all());
        return redirect()->back()->with('success', 'Page Created Successfully');
    }

    public function edit($id)
    {
        $page = $this->pageRepository->getById($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $this->pageRepository->update($request->all(), $id);
        return redirect()->route('admin.page.index')->with('success', 'Page Updated successfully');
    }

    public function delete($id)
    {
        $this->pageRepository->delete($id);
        return redirect()->back()->with('success', 'Page Deleted Successfully');
    }
}
