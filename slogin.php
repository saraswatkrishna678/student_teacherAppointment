<?php
$con = mysqli_connect("localhost",'root',"","student_teacher");
if (!$con) echo 'connection error';
else {
        if(mysqli_num_rows(mysqli_query($con,"select * from s_register"))>0) {
            session_start();
            if (isset($_SESSION['user'])) {
                echo '<div style="display: inline-block;position: absolute;right: 2%">';
                 echo  '<h5 style="text-align: right;padding: 30px;background-color: aliceblue;display: inline-block;position: absolute;right: 2%;border-radius: 50%">'.$_SESSION['user'].'</h5>'.'</div>';
                echo  "<br>" .'<a href="logout.php" > <input type="submit" value="Logout" ></a>';
                echo "<header>";include_once 'home1.php'; echo "</header>";

            } else {
                if (isset($_POST['log'])=='Login'){
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $data = mysqli_fetch_assoc(mysqli_query($con, "select * from s_register where email = '$user'"));
                if ($user == $data['email'] and $pass == $data['password']) {
                    $name=$data['name'];
                    $_SESSION['user'] = $name;
                    echo '<script> location.href="slogin.php";</script>';
                }
                else {
                    echo '<script>alert("invalid username and password");
                                    location.href="student.html";
                                    </script>';
                }
            }
        }
    }
}
?>
