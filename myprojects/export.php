<?php  
 //export.php  
 if(isset($_POST["create_word"]))  
 {  
      if(empty($_POST["heading"]) || empty($_POST["description"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
           echo '<script>window.location = "index.php"</script>';  
      }  
      else  
      {  
          //file pointer
          $fp=fopen('../myprojects/'.$_POST["heading"].'', 'w');

          //write into the file
          fwrite($fp, ''.$_POST["description"].'');

          //close the file
          fclose($fp);

          echo 'Your file was created.';



          // header("Content-type: application/vnd.ms-word");  
          // header("Content-Disposition: attachment;Filename=".$_POST["heading"].".doc");  
          // header("Pragma: no-cache");  
          // header("Expires: 0");
          // echo $_POST["description"];  
      }  
 }  
 ?>  