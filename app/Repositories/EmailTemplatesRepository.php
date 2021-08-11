<?php

namespace App\Repositories;

use App\Interfaces\EmailTemplatesRepositoryInterface;
use App\Models\EmailTemplates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailTemplatesRepository implements EmailTemplatesRepositoryInterface
{
    public function getAllEmailTemplates()
    {
        return EmailTemplates::get();
    }

    /**
     * @param Request $request
     * @return array|bool
     */
    public function validateEmailTemplate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subject' => 'required|',
            'action' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return ['status' => false, 'result' => $validator];
        }
        return ['status' => true, 'result' => null];
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function storeEmailTemplate(Request $request)
    {
        $requestData = $request->all();
        return EmailTemplates::create($requestData);
    }

    public function getEmailTemplateDetail($id)
    {
        return EmailTemplates::find($id);
    }

    /**
     * @param $id
     * @param Request $request
     * @return bool
     */
    public function updateEmailTemplate($id, Request $request): bool
    {
        $requestData = $request->all();
        $email = EmailTemplates::findOrFail($id);
        $email->update($requestData);
        return true;
    }

    public function deleteTemplate($id): bool
    {
        EmailTemplates::where('id', $id)->delete();
        return true;
    }

}
