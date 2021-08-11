<?php


namespace App\Interfaces\Admin;


interface PageInterface
{
    public function getAll();

    public function store($requestData);

    public function getById($id);

    public function getBySlug($slug);

    public function update($requestData, $id);

    public function delete($id);
}
