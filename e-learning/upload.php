<?php

   if(isset($_FILES['userfile']['name'])){
       $name=$_FILES['userfile']['name'];
       $temp_name=$_FILES['userfile']['temp_name'];

       $location='uploads/';
       $new_name=$location.$name;

       if(!empty($name)){
           if(move_uploaded_file($temp_name,$new_name)){
               echo 'uploaded !' ;
           }
           
       }else{

        echo 'please select  a file!';
       }
   }
  

  ?>
  
  <br><br><br><br>
   <form action="upload.php" method="post" enctype="multipart/form-data">
            select Image: <input type="file" name="file" id="file" ></br></br>
            <input type="submit" value="Upload !" name="submit">
            
        </form>