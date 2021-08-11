<?php


namespace App\Interfaces;


interface ImageInterface
{
    public function store($file, $uploadPath,$fileName = null);

    public function update($oldFile, $newFile, $uploadPath);

    public function removeImage($fileName, $uploadPath);
}
