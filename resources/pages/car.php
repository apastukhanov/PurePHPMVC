<?php 

    $basePath = dirname(dirname(__DIR__));

    use CustomComponent\Component;
    // use Model\Car;

    // include($basePath . '/include/func.inc.php');
    $user = get_user();
    
    // $isCarFound = false;
    // $id = $_REQUEST['id'];
    // $car = Car::get($id );


    // if ($car !== null) {
    //     $isCarFound = true;
    // }

    include($basePath . '/resources/components/nav.inc.php') 
?>

<div class="main" style="display: flex; flex-grow: 1; justify-content:center; align-items:center; flex-direction:column; gap: 100px; margin: 20px" >


    <?php
        if ($car !== null) {
            Component::create("card", $car) -> render();
        } else {
            echo "<div><p>Oops!....</p>Car with $id is not found!<br/><br/></div>";
        }
    ?>
</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>