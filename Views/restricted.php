<?php
$br = '<br/>';
if (isset($_SESSION['admin'])) {
    echo 'WELCOME! '.$_SESSION['admin'].$br;
    echo '<a class="btn btn-danger" href="close-session-login.php">Close Session</a>';
}else {
    header('Location:/register.php');
}

?>