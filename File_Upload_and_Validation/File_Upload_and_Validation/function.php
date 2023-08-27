<?php
function image_resize($source,$destination,$new_width=100,$new_height=100) {
    list($width,$height) = getimagesize($source);
    $newimage = imagecreatetruecolor($new_width,$new_height);
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $source);
    if($mime == 'image/jpeg') {
        $src = imagecreatefromjpeg($source);
        imagecopyresized($newimage,$src,0,0,0,0,$new_width,$new_height,$width,$height);
        imagejpeg($newimage,$destination);
    } elseif($mime == 'image/png') {
        $src = imagecreatefrompng($source);
        imagecopyresized($newimage,$src,0,0,0,0,$new_width,$new_height,$width,$height);
        imagepng($newimage,$destination);
    } elseif($mime == 'image/gif') {
        $src = imagecreatefromgif($source);
        imagecopyresized($newimage,$src,0,0,0,0,$new_width,$new_height,$width,$height);
        imagegif($newimage,$destination);
    }
}