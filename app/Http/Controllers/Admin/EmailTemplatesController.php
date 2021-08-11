<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repositories\EmailTemplatesRepository;
use Illuminate\Http\Request;

class EmailTemplatesController extends Controller
{
    protected $emailTemplatesRepository;

    public function __construct(EmailTemplatesRepository $emailTemplatesRepository)
    {
        $this->emailTemplatesRepository = $emailTemplatesRepository;
    }

    public function index()
    {
        $email_templates = $this->emailTemplatesRepository->getAllEmailTemplates();
        return view('admin.email_templates.index', compact('email_templates'));
    }

    public function add()
    {
        return view('admin.email_templates.create');
    }

    public function store(Request $request)
    {
        $is_valid = $this->emailTemplatesRepository->validateEmailTemplate($request);
        if (!empty($is_valid) && $is_valid['status'] == false) {
            return redirect()->back()->withErrors($is_valid['result'])->withInput();
        }
        $this->emailTemplatesRepository->storeEmailTemplate($request);
        return redirect()->route('admin.email_templates')->with('success', 'Data add successfully');
    }

    public function edit($id)
    {
        $email_template = $this->emailTemplatesRepository->getEmailTemplateDetail($id);
        return view('admin.email_templates.edit', compact('email_template'));
    }

    public function update(Request $request, $id)
    {
        $is_valid = $this->emailTemplatesRepository->validateEmailTemplate($request);
        if (!empty($is_valid) && $is_valid['status'] == false) {
            return redirect()->back()->withErrors($is_valid['result'])->withInput();
        }
        $this->emailTemplatesRepository->updateEmailTemplate($id, $request);
        return redirect()->route('admin.email_templates')->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->emailTemplatesRepository->deleteTemplate($id);
        return redirect()->route('admin.email_templates')->with('success', 'data deleted successfully');
    }

}
