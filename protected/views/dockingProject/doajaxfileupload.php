<?php

$error = "";
$msg = "";
$domain = "http://demo.hakema.net/website/";
$fileElementName = 'fileToUpload';
if (!empty($_FILES[$fileElementName]['error'])) {
    switch ($_FILES[$fileElementName]['error']) {

        case '1':
            $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
            break;
        case '2':
            $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
            break;
        case '3':
            $error = 'The uploaded file was only partially uploaded';
            break;
        case '4':
            $error = 'No file was uploaded.';
            break;

        case '6':
            $error = 'Missing a temporary folder';
            break;
        case '7':
            $error = 'Failed to write file to disk';
            break;
        case '8':
            $error = 'File upload stopped by extension';
            break;
        case '999':
        default:
            $error = 'No error code avaiable';
    }
} elseif (empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none') {
    $error = 'No file was uploaded..';
} else {
    $userfile_name = $_FILES['fileToUpload']['name'];
    $userfile_extn = substr($userfile_name, strrpos($userfile_name, '.')+1);
    
    $msg .= " File Name: " . $_FILES['fileToUpload']['name'] . ", ";
    $msg .= " File Size: " . @filesize($_FILES['fileToUpload']['tmp_name']);
    $tmpFileName = (string)mt_rand(1, 100000).'.'.$userfile_extn;
    $_SESSION['upload_docking'] = $tmpFileName;
    $target_path = "fileUpload/".$tmpFileName;
    $url_file = "";

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
        $url_file = $domain.$target_path;
        $msg .= " has been uploaded.";
    } else {
        $error = "There was an error uploading the file, please try again!";
    }

    //for security reason, we force to remove all uploaded file
    //@unlink($_FILES['fileToUpload']);		
}
echo "{";
echo "error: '" . $error . "',\n";
//echo "msg: '" . $msg . "'\n";
echo "msg: '" . $tmpFileName . "'\n";
echo "}";


?>