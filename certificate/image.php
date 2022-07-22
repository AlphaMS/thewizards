<?php
include_once 'config.php';
include 'vendor/autoload.php';

use \ConvertApi\ConvertApi;

ConvertApi::setApiSecret('QFkXlKV1I3vwqy5C');


if(isset($_FILES['certificate'])){
    // echo "<pre>";
    // print_r($_FILES['certificate']);
    // echo "</pre>";
    // exit();
    $image_name = $_FILES['certificate']['name'];
    $image_size = $_FILES['certificate']['size'];
    $tmp_name = $_FILES['certificate']['tmp_name'];
    $image_error = $_FILES['certificate']['error'];

    $name = $_POST['name'];

    if($image_error === 0){
        $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_lowerCase = strtolower($image_extension);

        $allowed_files = array("jpg", "jpeg", "png");

        if(in_array($image_lowerCase, $allowed_files)){
            $new_image_upload = uniqid("DOC-",true) . ".". $image_lowerCase;
            // its path plus the image name
            $image_uploaded_path = "uploads/". $new_image_upload;
            move_uploaded_file($tmp_name, $image_uploaded_path);

            $result = ConvertApi::convert('pdf', [
                'Files' => [
                    "uploads/". $new_image_upload,
                ],
            ], 'images'
            );
            $result->saveFiles('pdfFiles');
            
            $sql_id = "SELECT id FROM image ORDER BY id DESC LIMIT 1";
            $res = mysqli_query($conn, $sql_id);
            $key = mysqli_fetch_assoc($res);
            // echo $key;
            mysqli_free_result($res);
            
            $id = $key['id'] + 3;
            // echo $id;
            $sql = "INSERT INTO image VALUES('$id', '$name', '$new_image_upload')";
            mysqli_query($conn, $sql);
            // md5($id);
            header("Location: view.php?id=$id");
        }else{
            $message = "Select the allowed extesion files (.jpg, .jpeg, .png)";
            header("Location: index.php?err=$message");
        }
    }else{
        $message = "image uploading falied";
        header("Location: index.php?err=$message");
    }

}else{
    $message = "Please Uplaod File";
    header("Location: index.php?err=$message");
}
?>