<?php


class portfolio extends Controller
{
    function index()
    {
        $this->projects = get_all("SELECT * FROM project");
    }

    function index_upload()
    {
        $f = isset($_FILES["photo"]) ? $_FILES["photo"] : false;
        if (!$f) {
            __('upload ebaõnnestus');
            //  return false;
        }
        $target_dir = "assets/project_files/" . basename($f["name"]);
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_dir . $f["name"])) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($f['size'] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($f["tmp_name"], $target_dir)) {
                $project['project_name'] = basename($f["name"]);
                $project['project_file'] = basename($f["name"]);
                insert('project', $project);
                echo "The file " . basename($f["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    function view_ajax()
    {
        $project_id = $this->params[0];
        $result = update('project', array('project_name' => $_POST['project_name']), "project_id={$project_id}");
        echo $result ? 'Ok' : 'Fail';
        die();
    }
}