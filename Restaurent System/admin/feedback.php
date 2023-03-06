
<?php
  session_start();
	include "connection.php";
?>
<html>
    
        <title>Feedback</title>
   
        <script type="text/javascript">
    $query = "SELECT * from feedback ORDER BY name DESC";
    $res = mysqli_query($db, $query);
     if(!$res){
      echo "Can't retrieve data " . mysqli_error($db);
      exit;
    }
    return $res;
  }

  </script>

        <style>
           body{
    margin: 0;
    padding: 0;
    text-align: center;
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/kg.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.contact-title{
    margin-top: 100px;
    color: #fff;
    text-transform: uppercase;
    transition: all 4s ease-in-out;
}

.contact-title h1{
    font-size: 32px;
    line-height: 10px;
}

.contact-title h2{
    font-size: 16px;
}

form{
    margin-top: 50px;
    transition: all 4s ease-in-out;
}

.form-control{
   width: 600px;
   background: transparent;
   border: none;
   outline: none;
   border-bottom: 1px solid gray;
   color: #fff;
   font-size: 18px;
   margin-bottom: 16px;  
}

input{
    height: 45px;
}

form .submit{
    background: #ff5722;
    border-color: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
}

form .submit:hover{
    background-color: #f44336;
    cursor: pointer;
}

        </style>
    

    <body>
    <?php
if(isset($_POST['submit'])){ 

//    $id = $_POST['id'] ;
   $name = $_POST['name'] ;
   $email = $_POST['email'] ;
   $message = $_POST['message'] ;
   $query ="INSERT INTO feedback (name, email, message ) VALUES ('".$name."','".$email."','".$message."')";
   //$query = 'INSERT INTO feedback (name,email,message) VALUES ()'
    $res = mysqli_query($db, $query);

    
  }
  
?>
        <div class="contact-title">
            <h1>Say Hello</h1>
            <h2>We are always ready to serve you!</h2>
        </div>

        <div class="contact-form">
            <form id="contact-form" method="POST" action="feedback.php">
                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name" required>
                <br>
                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email" required>
                <br>

                    <textarea name="message" id="messge" class="form-control" placeholder="Message" row="4" required></textarea><br>

                    <input type="submit" placeholder="Message" class="form-control submit" value="SEND MASSAGE" name="submit">
            </form>

            
        </div>
    </body>


</html>