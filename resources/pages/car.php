<?php 

    $basePath = dirname(dirname(__DIR__));

    use App\Views\Component;

    $user = get_user();
    
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