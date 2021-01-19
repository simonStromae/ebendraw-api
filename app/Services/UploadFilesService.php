<?php


namespace App\Services;

use Carbon\Carbon;

class UploadFilesService
{

    /**
     * @param $image
     * @param string $prefix eg: "avatar"
     * @param string $file_path eg: "image/avatars"
     * @return string
     */
    public static function saveFile($image, string $prefix, string $file_path):string
    {
        $currentDate = Carbon::now()->toDateString();
        $imagename =  $prefix.'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
        $image->storeAs('public/'.$file_path, $imagename);

        return $imagename;
    }
}
