<?php 

    if (!isset($this->data['model']) 
            || !isset($this->data['id'])
            || !isset($this->data['price'])
            || !isset($this->data['img'])
        ) {
        header("Location: /?error=Данных для отображения componenta card не хватает");
    }
    $id =  $this->data['id'];
    $title = $this->data['model'];
    $price = $this->data['price'];
    $img = $this->data['img'];

?>

<div class="hero is-medium is-primary is-bold">
    <div class="card">
        <div class="img-frame">
            <a href="<?= "cars?id=$id" ?>">
                <img style="width: 200px; height: 150px; margin:auto; border-radius: 25px;" src="<?= $img?>" alt="">
            </a>
        </div>
        <p class="title" style="margin: 40px 0px 0px 0px">Model: <span><?=$title ?></span></p>
        <p class="price" style="margin: 10px 0px 0px 0px">Price: <span><?=$price ?> CAD</span></p>
        <br/>
    </div>
</div>

<style>
    .card {
        text-align: center;
        border-radius: 25px;
        border: 2px solid green;
        padding: 20px; 
        width: 250px;
        height: 250px; 
    }

    .img-frame {
        border-radius: 25px;
        border: 2px solid;
        margin: 10px;
    }

</style>
