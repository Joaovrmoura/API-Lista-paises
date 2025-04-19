<?php

defined('CONTROL') or die('Acesso inválido');

if(isset($_GET['country_name'])){
    $country = $_GET['country_name'];
    $api = new ApiConsumer();
    $country_data = $api->get_country($country);    
}else{
    header('location: ?route=home');
    die();
}

?>

<div class="container-mt-5">
    <div class="d-flex">
        <div class="card p-2 shadow">
            <img src="<?= $country_data[0]['flags']['png'] ?>" alt="">
        </div>
        <div class="ms-5 align-self-center">
            <p class="display-3"><?= $country_data[0]['name']['common'] ?></p>
            <p class="p-0 m-0">Capital:</p>
            <h4 class="p-0 m-0"><?= $country_data[0]['capital'][0]  ?? 'não existe'?></h4>
        </div>
    </div>

    <div class="row m-3">
        <div class="col">
            <p>Região: <br><strong><?= $country_data[0]['region']?></strong> </p>
            <p>Sub-região:<br> <strong><?= $country_data[0]['subregion'] ?? 'não existe'?></strong> </p>
            <p>População: <br><strong><?= $country_data[0]['population']?></strong> </p>
            <p>Area: <br> <strong><?= $country_data[0]['area']?></strong> Km<sup>2</sup></p>
        </div>
    </div>
    <div class="m-4">
        <a href="?route=home" class="btn btn-primary px-5">Voltar</a>
    </div>

</div>