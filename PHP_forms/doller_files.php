<?php
print_r($_FILES);
if($_FILES['fileUpload'])
{
    $path = $_FILES ['fileUpload']['name'];
    $upload_path = "./uploads/".$path;
    move_uploaded_file($_FILES['fileUpload']['tmp_name'],$upload_path)
    || die("faild to upload");
}
else{
    die("no file found");
}
?>