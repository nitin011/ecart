<?php

namespace App\Services;


use App\Models\City;

class CityService
{
    protected $model;

    public function __construct(City $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->query()->findOrFail($id);
    }

    public function getByIdWithTrashed($id)
    {
        return $this->model->withTrashed()->findOrFail($id);
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
        $data['deleted_at'] = null;
        return $this->model->withTrashed()->updateOrCreate(['name' => $data['name'], 'country_id' => $data['country_id']], $data);
    }

    public function delete($id)
    {
        $city = $this->model->query()->findOrFail($id);
        $city->update(['status' => 'inactive']);
        return $city->delete();
    }

    public function getIdNames()
    {
        return $this->model->query()->pluck('name', 'id');
    }

    public function getIdNamesWithTrashed()
    {
        return $this->model->withTrashed()->get()->pluck('name', 'id');
    }

}
