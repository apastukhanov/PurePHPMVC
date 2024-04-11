<?php 
    use App\Views\Component;

    $basePath = dirname(dirname(__DIR__));    
    
    $user = get_user();

    include($basePath . '/resources/components/nav.inc.php');

?>

<div class="main" style="display: flex;justify-content:flex-start; flex-grow: 1; margin: 40px; " >
        <?php if((isset($_COOKIE["user-name"]) || isset($_POST["user-name"])) && !isset($_GET['error'])): ?>
            <div style="display: grid; grid-template-columns: auto auto auto; gap: 30px; margin-left: 17%">
                <?php foreach ($cars as $car) {
                    Component::create("card", $car) -> render();
                }
                ?>
            </div>
        <?php else:
            header("Location: /login");   
        ?>
        <?php endif ?>

</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>
    