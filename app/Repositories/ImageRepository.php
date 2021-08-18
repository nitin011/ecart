<?php


namespace App\Repositories;

use App\Interfaces\ImageInterface;
use Illuminate\Support\Str;

class ImageRepository implements ImageInterface
{
    public function store($file, $uploadPath, $fileName = null)
    {
        $uploadPath = storage_path($uploadPath);
        $extension = $file->getClientOriginalExtension();
        $fileName = is_null($fileName) ? Str::uuid(). '.' . $extension : $fileName . '.' . $extension;
        $file->move($uploadPath, $fileName);
        return $fileName;
    }

    public function update($oldFile, $newFile, $uploadPath)
    {
        $uploadPath = storage_path($uploadPath);
        if (!empty($oldFile)) {
            $imagePath = $uploadPath . $oldFile;
            @unlink($imagePath);
        }
        $extension = $newFile->getClientOriginalExtension();
        $fileName = Str::uuid() . '.' . $extension;
        $newFile->move($uploadPath, $fileName);
        return $fileName;
    }

    public function removeImage($fileName, $uploadPath)
    {
        try {
            $uploadPath = storage_path($uploadPath);
            if (!empty($fileName)) {
                $imagePath = $uploadPath . $fileName;
                return @unlink($imagePath);
            }
            return false;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return false;
        }
    }
}
