<?php

    if (isset($_POST['username'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if ($username == "user" && $password == "admin"){
             echo "
             <script>
                alert('Access Granted');
                window.location='../main.php';
            </script>";
        }else{
            echo "
             <script>
                alert('Incorrect Username or Password');
                window.location='../index.php';
            </script>";
        }
    }    
            
       
// if ($username = "user" && $password = "user") {
        //         // header("location:../main.php");
        //     }#else{
        //     //     echo "Incorrect Username or password";
        //     //     echo "
        //     //     <script>
        //     //         alert('Incorrect Username or Password');
        //     //         window.location='index.php';
        //     //     </script>";
        //     // }
        //     }
?>

 