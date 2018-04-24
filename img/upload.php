<?php
    $imgname = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
    $filepath = 'img';
    if(move_uploaded_file($tmp,$imgname)){
        echo "上传完毕";
    }else{
        echo "上传失败";
    }
?>
