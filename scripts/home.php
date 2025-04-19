<?php


// bloqueia o acesso ao script de forma direta
defined('CONTROL') or die('Acesso negado');

$api = new ApiConsumer();
// get all countries data
$countries = $api->get_all_countries();

// get a specific country name
?>
<style>

body{
    overflow-x: hidden ;
}

</style>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>Paises do mundo</h3>
            <hr>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-4">
        <select id="meuSelect" class="form-select" aria-label="Default select example">
            <option selected>Lista de Países</option>
            <?php foreach ($countries as $country) : ?>
                <option value="<?= $country ?>"><?= $country ?></option>
            <?php endforeach ?>
        </select>
    </div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", () =>{ 
            // País seleciondo
            const select_country =document.querySelector("#meuSelect");
            select_country.addEventListener('change', () => {
                const country =select_country.value;
                window.location.href = `?route=country&country_name=${country}`
            })
        })
    </script>