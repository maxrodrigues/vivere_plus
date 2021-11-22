<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageRepository
{

    public function saveImage($image, $id, $slugProperty, $count = null)
    {
        if (!is_null($image)) {

            $extension = $image->getClientOriginalExtension();
            $slugProperty .= !empty($count) ? "-{$count}" : '';

            $fileName = "{$slugProperty}.{$extension}";

            $url = "http://{$_SERVER['HTTP_HOST']}/img/property/{$id}/{$fileName}";

            $return = $this->moveToPublicFolder($image, "img/property/{$id}/", $fileName);

            return $url;
        } else {
            // return 'http://'.$_SERVER['HTTP_HOST'].'/images/'.$type.'/placeholder300x300.jpg';
        }
    }

    public function moveToStorageFolder($image, $folder, $imageName)
    {
        return $image->storeAs($folder, $imageName);
    }

    public function moveToPublicFolder($image, $folder, $imageName)
    {
        return $image->move(public_path($folder), $imageName);
    }

    public function moveToS3Folder($image, $folder, $imageName)
    {
        return $image->storeAs($folder, $imageName, 's3');
    }
}
