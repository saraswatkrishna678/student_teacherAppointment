<?php
$con = mysqli_connect("localhost", 'root', "", "student_teacher");
if (!$con) echo 'connection error';
else {
    if(isset($_POST['register'])=='Register') {
        $name=$_POST['name'];
        $psw=$_POST['psd'];
        $branch=$_POST['dep'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "select * from t_register where email='$email' "));
        if ($data['email'] != "$email") {
            $insert = "insert into t_register(name,email,password,branch,contact_no) values ('$name','$email','$psw','$branch','$contact')";
            if (mysqli_query($con, $insert)) echo '<script>alert("Registration successful");location.href="teacherPortal.php" </script>';
        }
        else echo "<script> alert('account already exist');
                   location.href='TeacherRegistration.html';     </script>";}

}

?>