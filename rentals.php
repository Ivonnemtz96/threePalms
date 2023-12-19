<?php
    include('indexcontroller.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title='Rentals';
    include('includes/head.php');
?>

<body>
    <?php
        include('includes/preloader.php');
        include('includes/header.php');
        include('modules/'.$lenguaje.'rentals.php');
        include('includes/footer.php');
        include('includes/scripts.php');
        include('includes/redes.php');   
    ?>

</body>

</html>