<?php
$target_dir = "H:/wamp64/www/RecordSubmission/uploads/";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

 if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
        echo "The file ".$target_file1. " has been uploaded.";
	    
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>