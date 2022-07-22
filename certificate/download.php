<?php
include_once 'config.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM image WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $key = mysqli_fetch_assoc($res);
    // echo $key['image'];

    $fileName = basename($key['image']);
    function replace_extension($filename, $new_extension) {
        $info = pathinfo("uploads/" . $filename);
        return $info['filename'] . '.' . $new_extension;
    }
    $fileName = replace_extension($fileName, "pdf");
    $filePath = "pdfFiles/" . $fileName;

    if(file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/pdf");
        header("Content-Transfer-Encoding: binary");

        readfile($filePath);
    }else{
        $message = "Something went wrong.";
        header("Location: view.php?id=$id&err=$message");
    }

?>