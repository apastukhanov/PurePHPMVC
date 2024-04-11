<?php 

    if (!isset($this->data['model']) || !isset($this->data['price'])
            || !isset($this->data['img'])) {
        // die();
        header("Location: /index.php?error=Данных для отображения componenta card не хватает");
    }
    $id =  $this->data['id'];
    $title = $this->data['model'];
    $price = $this->data['price'];
    $img = $this->data['img'];

?>


<div class="hero is-medium is-primary is-bold">
    <div class="card" style="border: solid green; text-align:center;">
        <a href="<?= "cars?id=$id" ?>" style="border: solid; margin: 10px">
            <img style="width: 150px; height: 100px; margin:auto" src="<?= $img?>" alt="">
        </a>
        <p class="title" style="margin:auto">Model: <span><?=$title ?></span></p>
        <p class="price" style="margin:auto">Price: <span><?=$price ?> CAD</span></p>
        <br/>
    </div>
</div>
