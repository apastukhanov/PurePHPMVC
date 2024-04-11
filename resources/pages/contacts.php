<?php 

    $basePath = dirname(dirname(__DIR__));

    $user = get_user();
    

    include($basePath . '/resources/components/nav.inc.php') 
?>

<div class="main" style="display: flex; flex-grow: 1; align-items:center; flex-direction:column; gap: 100px; margin: 20px" >

    <div>
        <p>Haifa</p>
        <p>Spring Garden Ave</p>
    </div>

</div>

<?php include($basePath . '/resources/components/footer.inc.php') ?>