<?php
echo "load_test";
class FileUpload{
	function Upload(){
// Php uplaod code below
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $Upload_True = 1;
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);
         echo "File Got Submited";
      }else{
         print_r($errors);
      }
   }
// php upload code above
	}
}
?>