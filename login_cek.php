            <?php
            session_start();
            include 'config.php';

            $username_user = $_POST['username_user'];
            $pwd_user = $_POST['pwd_user'];
            $u_login = mysqli_query($config,"select * from tb_user where username_user='$username_user' and pwd_user='$pwd_user'");
            $u_login2 = mysqli_num_rows($u_login);

            if($u_login2 > 0){
                $u_login3 = mysqli_fetch_assoc($u_login);
                $_SESSION['username_user'] = $u_login3['username_user'];
                $_SESSION['nama_user'] = $u_login3['nama_user'];
                $_SESSION['id_user'] = $u_login3['id_user'];
                $_SESSION['status'] = 'login';
                header("location:.");
            }else{
                
                echo "<script>alert('Username/Password anda salah!!!');window.location='.'</script>";
            }
            ?>