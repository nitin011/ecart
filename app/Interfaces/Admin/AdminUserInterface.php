<?php


namespace App\Interfaces\Admin;


use App\Interfaces\ImageInterface;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

interface AdminUserInterface
{
    public function getAll();

    public function store($data);

    public function sendWelcomeMail($data, $password);

    public function update($data, $id);

    public function getById($id);

    public function delete($id);
}
