<?php


namespace App\Services;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    public function uploadFileFromUrl($url, $directory = 'public/common')
    {
        $directory = str_replace('app/', '', $directory);
        $file = file_get_contents($url);
        $extension = pathinfo(storage_path($url), PATHINFO_EXTENSION);
        $fileName = Str::uuid() . '.' . $extension;
        Storage::put($directory . '/' . $fileName, $file);
        return $fileName;
    }
}
