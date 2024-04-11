<?php 
    $basePath = dirname(dirname(__DIR__));

    $user = get_user();
    include($basePath . '/resources/components/nav.inc.php');

?>

<div class="main" style="display: flex;flex-grow: 1; justify-content:center; align-items:center; flex-direction:column; gap: 100px;" >

    <?php   
        setcookie("user-name", "Guest", time() - (86400 * 30));
        echo compose_menu("Вы логинились") ;
        header("Location: /");
    ?> 
    
</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>