<?php

class Helper {

    public static function format_rupiah($number){
       
    }

    if (! function_exists('uploadFile')) {
    function uploadFile($file, $path)
    {
        $fileName   = time() . '.' . $file->getClientOriginalExtension();
        $filePath   = "public/$path/";
        $file       = $file->storeAs($filePath,$fileName);

        return $fileName;
    }
}

}