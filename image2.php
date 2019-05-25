<?php

/*echo "<pre>@@@@111";
echo $_POST['name'];
print_r($_FILES); exit;*/


$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
//$file_type=$_FILES['image']['type'];

//echo "###" . $file_name; exit;


if(move_uploaded_file($file_tmp,"images/".$file_name)){

          echo "Success";
  }else{
          echo "errr";
  }

?>