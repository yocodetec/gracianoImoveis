
<?php
    // Nesse protótipo, esse arquivo não é necessário. Pois, a verificação é feita diretamente no publicoadm.php.
    session_start();
    if($_SESSION['loggedInADM'] == '1'){
        header('Location: admin.php');
    }
    else {
        header('Location: ../loginadm.php');
        exit();       
    }
?>
