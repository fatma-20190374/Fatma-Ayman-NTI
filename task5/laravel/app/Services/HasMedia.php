<?php

namespace App\Services;
Class HasMedia
{
    public function upload($image, $path)
    {
        $imageName = $image->hashName();
        $image->move($path, $imageName);
        return $imageName;
        
    }
    public function delete($path)
    {
        if(file_exists($path))
        {
            unlink($path);
            return true;
        }
        return false;
    }
}
