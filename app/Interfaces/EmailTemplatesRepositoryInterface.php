<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface EmailTemplatesRepositoryInterface
{
    public function getAllEmailTemplates();

    public function validateEmailTemplate(Request $request);

    public function storeEmailTemplate(Request $request);

    public function getEmailTemplateDetail($id);

    public function updateEmailTemplate($id, Request $request);

    public function deleteTemplate($id);
}
