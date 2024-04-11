<?php 
    use CustomComponent\Component;
    use Model\Car;

    $basePath = dirname(dirname(__DIR__));    
    
    // include($basePath . '/include/func.inc.php');
    $user = get_user();
    // $cars = Car::all();

    include($basePath . '/resources/components/nav.inc.php');

?>

<div class="main" style="display: flex;justify-content:flex-start; flex-grow: 1; margin: 40px; " >
        <?php if((isset($_COOKIE["user-name"]) || isset($_POST["user-name"])) && !isset($_GET['error'])): ?>
            <div style="display: grid; grid-template-columns: auto auto auto auto; gap: 30px; margin: 20px">
                <?php foreach ($cars as $car) {
                    Component::create("card", $car) -> render();
                }
                ?>
            </div>
        <?php else:
            // header("Location: static/pages/login.php");   
        ?>
        <?php endif ?>

</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>
    