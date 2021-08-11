<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\PageInterface;
use App\Models\Page;
use Illuminate\Support\Facades\Artisan;

class PageRepository implements PageInterface
{

    public function __construct()
    {
        (($this->isDefaultPagesExists() == false) ? self::seedDefaultPages() : null);
    }

    public function isDefaultPagesExists()
    {
        return (self::getAll()->count() == count(config('default_pages')));
    }

    public function seedDefaultPages()
    {
        Artisan::call('db:seed --class=DefaultPagesSeeder');
    }

    public function getAll()
    {
        return Page::all();
    }

    public function store($requestData)
    {
        return Page::create($requestData);
    }

    public function getById($id)
    {
        return Page::findOrFail($id);
    }

    public function getBySlug($slug)
    {
        return Page::where('slug', $slug)->firstOrFail();
    }

    public function update($requestData, $id)
    {
        return Page::findOrFail($id)->update($requestData);
    }

    public function delete($id)
    {
        return Page::findOrFail($id)->delete();
    }
}
