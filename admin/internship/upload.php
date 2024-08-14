<?php
$upload_dir = '../../img/internship/';
$imgset = array(
    'maxsize' => 3000,
    'maxwidth' => 3024,
    'maxheight' => 3024,
    'minwidth' => 10,
    'minheight' => 10,
    'type' => array('bmp', 'gif', 'jpg', 'jpeg', 'png'),
);

define('RENAME_F', 1);

function setFName($p, $fn, $ex, $i){
    if(RENAME_F == 1 && file_exists($p .$fn .$ex)){
        return setFName($p, $fn .'_'. ($i + 1), $ex, ($i + 1));
    } else {
        return $fn .$ex;
    }
}

if (isset($_FILES['upload']) && strlen($_FILES['upload']['name']) > 1) {
    define('F_NAME', preg_replace('/\.(.+?)$/i', '', basename($_FILES['upload']['name'])));
    $sepext = explode('.', strtolower($_FILES['upload']['name']));
    $type = end($sepext);
    $upload_dir = in_array($type, $imgset['type']) ? $upload_dir : $upload_dir;
    $upload_dir = trim($upload_dir, '/') . '/';
    
    if (in_array($type, $imgset['type'])) {
        list($width, $height) = getimagesize($_FILES['upload']['tmp_name']);
        if (isset($width) && isset($height)) {
            if ($width > $imgset['maxwidth'] || $height > $imgset['maxheight']) {
                $re = 'Width x Height = '. $width .' x '. $height .' \n The maximum Width x Height must be: '. $imgset['maxwidth']. ' x '. $imgset['maxheight'];
            } elseif ($width < $imgset['minwidth'] || $height < $imgset['minheight']) {
                $re = 'Width x Height = '. $width .' x '. $height .' \n The minimum Width x Height must be: '. $imgset['minwidth']. ' x '. $imgset['minheight'];
            } elseif ($_FILES['upload']['size'] > $imgset['maxsize'] * 1000) {
                $re = 'Maximum file size must be: '. $imgset['maxsize']. ' KB.';
            } else {
                $f_name = setFName($_SERVER['DOCUMENT_ROOT'] . '/' . $upload_dir, F_NAME, ".$type", 0);
                $uploadpath = $upload_dir . $f_name;
                if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) {
                    $CKEditorFuncNum = $_GET['CKEditorFuncNum'];
                    $url = 'https://empoweredforchange.or.tz/img/internship/' . $f_name;
                    $msg = F_NAME . '.' . $type .' successfully uploaded: \n- Size: '. number_format($_FILES['upload']['size'] / 1024, 2, '.', '') .' KB';
                    $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                } else {
                    $re = '<script>alert("Unable to upload the file")</script>';
                }
            }
        } else {
            $re = '<script>alert("Invalid image dimensions")</script>';
        }
    } else {
        $re = '<script>alert("Invalid file type")</script>';
    }
} else {
    $re = '<script>alert("No file uploaded")</script>';
}

@header('Content-type: text/html; charset=utf-8');
echo $re;