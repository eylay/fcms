<?php

function rs($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function upload($new_file, $prev_file=null)
{
    if ($prev_file && file_exists($prev_file)) {
        \File::delete($prev_file);
    }

    $relarive_path = "storage/app/public";
    $file_name = rs() . '.' . $new_file->getClientOriginalExtension();
    $result = $new_file->move(base_path($relarive_path),$file_name);
    return 'storage/' . $file_name;
}
