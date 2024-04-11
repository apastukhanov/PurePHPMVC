<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
        text-decoration: none;  
        }
    </style>
</head>
<body>

    <?php if (isset($_GET['error'])) :    ?>

        <div style="background: red; position: absolute; top: 0%; left: 40%">
            <p style="padding: 0px 10px"><?= $_GET['error']?></p>
        </div>


    <?php endif ?>


    <div style="margin: 0px; padding: 0px; display: flex; flex-direction: column; height: 100vh" >
        <div class="nav" style="background: greenyellow; display: flex; flex-grow: 0; justify-content:space-between; align-items: center; min-height: 75px">
            <div style="padding: 0px 20px; display: flex; gap: 20px">
                <a href="/">Home</a>
                <a href="/table">Table</a>
                <a href="/contacts">Contacts</a>
            </div>

            <div style="padding: 0px 20px; display: flex; gap: 20px">
                <div>Hi, <?= $user ?></div>
                <div>
                    <a href="<?= $user === 'Guest' ? '/login' : '/logout' ?>" > 
                        <?= $user === 'Guest' ? 'Login' : 'Logout' ?></div>
                    </a>
            </div>
            
        </div>
