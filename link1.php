<?php
$conn = new mysqli("localhost","root","aamv","mentorsmodule");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    // username and password sent from form 
      
      // $myusername = mysqli_real_escape_string($mentormodule,$user['username']);
      // $mypassword = mysqli_real_escape_string($mentormodule,$user['password']); 

            $myusername = $_POST["uname"];
            $mypassword = $_POST["psw"];

            echo $myusername." ".$mypassword;
            
      
      $sql = "SELECT * FROM user WHERE username = '".$myusername."' and password = '".$mypassword."'";
      $result = $conn->query($sql);

      // if ($result->num_rows == 0)
      //       die("Invalid Login");

      $user=$result->fetch_assoc();
     
      if($user['type']=='A'){
            header("Location: /DBMS/mentors-list.php");
       }
      else if($user['type']=='M'){
            header("Location: /DBMS/stud1-list.html");
       }
       else if($user['type']=='S'){
            header("Location: /DBMS/chatbox-for-stud.html");
       } 
       die();



?>