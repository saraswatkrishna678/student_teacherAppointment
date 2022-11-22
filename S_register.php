<?php
$con = mysqli_connect("localhost",'root',"","student_teacher");
if (!$con) echo 'connection error';
else {
    if(isset($_POST['register'])=='Register') {
        $name=$_POST['name'];
        $pass=$_POST['psd'];
        $branch=$_POST['dep'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $adress=$_POST['address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "select * from s_register where email='$email' "));
        if ($data['email'] != "$email") {
            $insert = "insert into s_register(name,password,branch,email,contact_no,address,state,city) values ('$name','$pass','$branch','$email','$contact','$adress','$state','$city')";
            if (mysqli_query($con, $insert)) echo '<script>alert("Registration successful");
                 location.href="home1.php" </script>';
        }
        else echo "<script> alert('account already exist');
                  location.href='StudentRegistration.html' ; </script>";
        }

    }
?>