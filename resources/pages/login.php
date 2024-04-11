<?php 
    $basePath = dirname(dirname(__DIR__));

    $user = get_user();

    include($basePath . '/resources/components/nav.inc.php');

?>

<div class="main" style="display: flex;flex-grow: 1; align-items:center; flex-direction:column; gap: 100px;" >

    <form action="/" method="POST">
        <div style="margin: 20px; display: flex; flex-direction: column; gap: 10px;">
            <label for="user-name; text-align: center; margin: 0px;" >Введи свое имя:</label>
            <input type="text" name="user-name">
            <button>Запомни меня</button>
        </div>
       
    </form>
    
</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>