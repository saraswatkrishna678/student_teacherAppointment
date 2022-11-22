<?php
$con = mysqli_connect("localhost",'root',"","student_teacher");
if (!$con) echo 'connection error';
else {
    if(mysqli_num_rows(mysqli_query($con,"select * from t_register"))>0) {
        session_start();
        if (isset($_SESSION['user'])) {
            echo  '<a href="logout.php"> <input type="submit" value="Logout"></a>'."<br>" ;
            echo  '<h5 style="text-align: right;">'.$_SESSION['name'].'</h5>'."<script> location.href='teacherPortal.php';</script>";

        } else {
            if (isset($_POST['log'])=='Login'){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $data = mysqli_fetch_assoc(mysqli_query($con, "select * from t_register where email = '$user'"));
                if ($user == $data['email'] and $pass == $data['password']) {
                    $name=$data['name'];
                    $_SESSION['user'] = $user;
                    $_SESSION['name']=$name;
                    echo '<script> location.href="tlogin.php";</script>';
                }
                else {
                    echo '<script>alert("invalid username and password");
                                    location.href="teacher.html";
                                    </script>';
                }
            }
        }
    }
}
?>
