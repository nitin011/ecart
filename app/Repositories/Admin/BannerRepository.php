<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\BannerInterface;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerRepository implements BannerInterface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getDetails($id): Banner
    {
        return Banner::findOrFail($id);
    }

    public function store($request): Banner
    {
        return Banner::create($request);
    }

    public function update($requestData, $banner_id)
    {
        return Banner::findOrFail($banner_id)->update($requestData);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getByType($type)
    {
        return Banner::where('type',$type)->get();
    }
}
