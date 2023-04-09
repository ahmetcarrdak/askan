<?php

$data = array(
    array(
        "name" => "APPLE Iphone 11",
        "img" => "img/phone/apple11.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "APPLE Iphone 11 Pro",
        "img" => "img/phone/apple11pro.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "Xiomi Redmi Note 8 Pro",
        "img" => "img/phone/redminote8pro.jpeg",
        "desc" => "64+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 4+ GB RAM"
    ),
    array(
        "name" => "Xiomi Redmi Note 10",
        "img" => "img/phone/redminote10.jpeg",
        "desc" => "64+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 4+ GB RAM"
    ),
    array(
        "name" => "Xiomi Redmi Note 10 Pro",
        "img" => "img/phone/redminote10pro.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "APPLE Iphone 13",
        "img" => "img/phone/apple13.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "APPLE Iphone 13 Pro",
        "img" => "img/phone/apple13pro.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "APPLE Iphone 11 Pro Max",
        "img" => "img/phone/apple11max.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "SAMSUNG Galaxy A04",
        "img" => "img/phone/sama04.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "SAMSUNG Galaxy A23",
        "img" => "img/phone/a23.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "OPPO A16",
        "img" => "img/phone/a16.jpeg",
        "desc" => "64+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 4+ GB RAM"
    ),
    array(
        "name" => "Xiomi Redmi Note 11",
        "img" => "img/phone/note11.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 6+ GB RAM"
    ),
    array(
        "name" => "SAMSUNG Galaxy A32",
        "img" => "img/phone/a32.jpeg",
        "desc" => "128+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
    array(
        "name" => "Xiomi Redmi Note 10S",
        "img" => "img/phone/10s.jpeg",
        "desc" => "256+ GB Dahili Hafıza, Çeşitli renk seçenekleri, 8+ GB RAM"
    ),
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
        <div class="alert" style="display: none"></div>
    </div>
</div>

<?php require "inc/alt.php"; ?>