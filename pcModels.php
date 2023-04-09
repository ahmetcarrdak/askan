<?php

$data = array(
    array(
        "name" => "Casper Excalibur",
        "img" => "img/pc/cex.jpeg",
        "desc" => "1 TB + 500 GB Dahili Hafıza, Çeşitli renk seçenekleri, 16 GB RAM, İntel Core İ7"
    ),
    array(
        "name" => "Casper Nirvana",
        "img" => "img/pc/cnir.jpeg",
        "desc" => "500 GB Dahili Hafıza, Çeşitli renk seçenekleri, 8 GB RAM, İntel Core İ5"
    ),
    array(
        "name" => "Lenovo V15",
        "img" => "img/pc/v15.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM, İntel Core İ5"
    ),
    array(
        "name" => "Asus Vivobook 14",
        "img" => "img/pc/vv14.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 4+ GB RAM, İntel Core İ3"
    ),
    array(
        "name" => "Lenovo İdeapad",
        "img" => "img/pc/ida.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM, İntel Core İ3"
    ),
    array(
        "name" => "Casper Nirvana",
        "img" => "img/pc/cnir.jpeg",
        "desc" => "500 GB Dahili Hafıza, Çeşitli renk seçenekleri, 8 GB RAM, İntel Core İ3"
    ),
    array(
        "name" => "Casper Nirvana",
        "img" => "img/pc/cnir.jpeg",
        "desc" => "500 GB Dahili Hafıza, Çeşitli renk seçenekleri, 8 GB RAM, İntel Core İ7"
    ),
    array(
        "name" => "Hp 15S",
        "img" => "img/pc/15s.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 4+ GB RAM, İntel Core İ5"
    ),
    array(
        "name" => "Lenovo V14",
        "img" => "img/pc/v14.jpeg",
        "desc" => "512+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM, İntel Core İ5"
    ),
    array(
        "name" => "Lenovo Victus",
        "img" => "img/pc/lvi.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM, İntel Core İ5"
    )
);

require "inc/ust.php";

?>


<style>
    .urunImage img {
        width: 100%;
        height: 300px;
    }

    .searchInput {
        border-radius: 10px;
        border: 1px solid rgba(81, 183, 206, 0.63);
        outline: #18af98;
        padding-left: 10px;
        font-size: 14px;
        color: #05455d;
        font-family: sans-serif;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col text-right p-4">
            Ürün Ara: <input type="search" name="" id="searchInput" class="searchInput">
        </div>
    </div>
    <div class="row p-3" id="urun">
        <?php
        for ($i = 0; $i < count($data); $i++) {
            //echo $data[$i]['name'];
            ?>
            <div class="col-lg-4 mt-5" id="urunItem">
                <div class="urunImage">
                    <img src="<?php echo $data[$i]['img']; ?>" alt="">
                </div>
                <div class="urunTit text-center"><?php echo $data[$i]['name']; ?></div>
                <div class="urunDesc">
                    <?php echo $data[$i]['desc']; ?>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>

<?php require "inc/alt.php"; ?>
