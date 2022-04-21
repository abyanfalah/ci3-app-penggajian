
<form action="" method="post" enctype="multipart/form-data" class="col-4 mx-auto">
  Select image to upload:
  <input class="form-control-file" type="file" name="foto">
  <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">

</form>


<?php


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $target_dir = base_url('uploads/');
  $tmp_name = $_FILES["foto"]["tmp_name"];
  $target_file = $target_dir . basename($_FILES["foto"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    if (file_exists($target_file)) {
      echo "File already exists";
      $uploadOk = 0;
    }else{
      if (move_uploaded_file($tmp_name, $target_file)){
        echo 'file uploaded';
        $uploadOk = 1;
      }else{
        echo 'failed to upload file';
      }
    }
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }



  // var_dump($_FILES);
  // var_dump($target_dir);
  // var_dump($target_file);
  // var_dump(pathinfo($target_file, PATHINFO_EXTENSION);
  // var_dump(pathinfo($target_file, PATHINFO_EXTENSION);
  // var_dump($check);
  // var_dump($_FILES['foto']['tmp_name']);
  // $foto = $_FILES['foto']['tmp_name'];
  // $foto = getimagesize($foto);

  // var_dump(getimagesize($foto));


  // echo basename($_FILES['foto']['name']);

}
?>