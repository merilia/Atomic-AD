<?php
/**
 * Created by PhpStorm.
 * User: henno.taht
 * Date: 27.10.2014
 * Time: 15:21
 */

class portfolio extends Controller {
    function index(){

    }



}
function index_upload()
{die("Jee");
    $f = isset($_FILES["input_upload"]) ? $_FILES["input_upload"] : false;
    if (!$f) {
        __('upload ebaõnnestus');
        return false;
    }
    $target_dir = "uploads/" . basename($f["name"]);
    $uploadOk = 1;
    // Check if file already exists
    if (file_exists($target_dir . $f["name"])) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($f['size'] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Only PDF files allowed
    if (!($f['type'] == "application/pdf")) {
        __('upload ebaõnnestus');
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($f["tmp_name"], $target_dir)) {
            echo "The file " . basename($f["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}