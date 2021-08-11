<?php


namespace App\Interfaces\Admin;


interface CategoryInterface
{
    public function getAll();

    public function getWithProducts();

    public function getWithActiveProducts();

    public function getParentWise();

    public function getById($category_id);
}
