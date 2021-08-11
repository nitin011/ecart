<?php

namespace App\Services;


use App\Models\Country;

class CountryService
{
    protected Country $model;

    public function __construct(Country $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->query()->findOrFail($id);
    }

    public function getAll()
    {
        return $this->model->query()->get();
    }

    public function getActive()
    {
        return $this->model->query()->where('status', 'active')->get();
    }

    public function updateOrCreate(array $data)
    {
        return $this->model->query()->updateOrCreate(['code' => $data['code'], 'alpha_2_code' => $data['alpha_2_code']], $data);
    }

    public function delete($id)
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    public function getCountryIdNames()
    {
        return $this->model->query()->pluck('name', 'id');
    }
}
