<?php


namespace App\Interfaces\Admin;


use Illuminate\Http\Request;

interface BannerInterface
{
    public function getAll();

    public function getDetails($id);

    public function store($request);

    public function update($requestData, $banner_id);

    public function delete($id);

    public function getByType($type);
}
