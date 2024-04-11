<?php 
    use App\Views\Component;

    $basePath = dirname(dirname(__DIR__));
    $user = get_user();    

    include($basePath . '/resources/components/nav.inc.php');

?>

<div class="main" style="display: flex;justify-content:center; flex-grow: 1; margin: 40px; " >
        <?php if(isset($_COOKIE["user-name"]) || isset($_POST["user-name"])) { 
                Component::create("table", $cars) -> render();
            }
            else {

            header("Location: /login");   
        }
        ?>
</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>
    