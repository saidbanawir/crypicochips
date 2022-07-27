<?php
            session_start();
            include 'config.php';

            $username_admin = $_POST['username_admin'];
            $pwd_admin = $_POST['pwd_admin'];
            $qlogin = mysqli_query($config,"select * from tb_admin where username_admin='$username_admin' and pwd_admin='$pwd_admin'");
            $q2login = mysqli_num_rows($qlogin);

            if($q2login > 0){
                $q3login = mysqli_fetch_assoc($qlogin);
                $_SESSION['username_admin'] = $q3login['username_admin'];
                $_SESSION['nama_admin'] = $q3login['nama_admin'];
                $_SESSION['status'] = 'login';
                header("location:.");
            }else{
                
                header("location:login.php");
            }
            ?>