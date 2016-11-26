<?php
//upload contentImg

function getcontentImg($pic){
	
//$images = filter_input(INPUT_POST, $pic);

$uploaddir ='C:/xampp/htdocs/assignment/contentImg/';
$uploadfile = $uploaddir . basename($_FILES[$pic]['name']);


// Upload file
if (move_uploaded_file($_FILES[$pic]['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}



}

?>