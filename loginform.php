
<?php
    session_start();
?>
<?php
    $msg = '';
            
    if (isset($_POST['login']) && !empty($_POST['username']) 
       && !empty($_POST['pass'])) {
        
       if ($_POST['username'] == 'admin' && 
          $_POST['pass'] == 'admin') {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = 'admin';
          
          echo "Login Successful";
          header("location: https://adypu.edu.in/"); 
          exit(); 

       }else {
          $msg = 'Wrong username or password';
       }
    }
?>
