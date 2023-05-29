<?php
require_once 'conexao.php';


session_start();
if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
    
} else {
    header("Location: login.php");
  
    exit();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Urbano</title>
</head>

<body>
    <nav class="nav-bar-0">
        <ul>

            <div class="nav-bar-1">
                <li><a href="#sobrenos">|Sobre nós </a></li>
                <li><a href="#acomodacoes">|Acomodações </a></li>
                <li><a href="#estrutura">|Estrutura </a></li>
                <li><a href="./reservas/reservas-logado.php">|Reservas| </a></li>

            </div>

            <div class="user-logado">
<a href="perfil-user.html"><img src="http://localhost/hotelurbano/homepage/img-homepage/Fundo%20Branco.png"></a>

            </div>
        </ul>
    </nav>

    <div class="slider"></div>
    <a name="sobrenos">
        <section>
            <div class="title">
                <p>Sobre o Hotel Urbano</p>
            </div>

            <div class="logo">
                <img src="./homepage/img-homepage/logourbano.png">
            </div>

            <div class="text-sobre">

                <h4>

                    <center>O Hotel Urbano encontra-se em excelente localização, na Beira-Mar de Fortaleza, com fácil
                        acesso
                        às
                        praias da cidade e do litoral, centro da cidade e </center>
                    <center>principais pontos turísticos. A feirinha de</center>
                    artesanato, tão tradicional e visitada, fica a menos de 100 metros de distância. Os apartamentos do
                    Hotel Urbano proporcionam o conforto e sofisticação necessárias para tornar inesquecível
                    a estadia, e são equipados com frigobar, cofre, TV com canais a cabo, camas confortáveis, ar
                    condicionado, acesso à internet via wi-fi free para hóspedes e estacionamento pago.
                    <br>

                    <center>Garanta a diversão e conforto de sua família em sua viagem à Fortaleza, hospede-se no Hotel
                        Urbano e</center>
                    <center>desfrute da melhor localização da Avenida Beira Mar!</center>
                    <center>Conheça um pouco das nossas acomodações:</center>


    </a>
    </div>
    <!--mudança-->

    </section>
    <a name="acomodacoes"></a>
    <section class="items">
        <div class="item">
            <img src="./homepage/img-homepage/standard.jpg">
            <br>
            <a href="./acomodacoes/index-standard.html"><button class="but-standard">Apartamento Standard</button></a>
        </div>
        <div class="item">
            <img src="./homepage/img-homepage/quintal .jpg">
            <br>
            <a href="./acomodacoes/index-quintal.html"> <button class="but-quintal">Apartamento Quintal</button></a>
        </div>
        <div class="item">
            <img src="./homepage/img-homepage/quintalfami.jpg">
            <br>
            <a href="./acomodacoes/index-quintalfam.html"><button class="but-fami">Apartamento Quintal
                    Família</button></a>
        </div>
        <div class="item">
            <img src="./homepage/img-homepage/quintalpisc .jpg">
            <br>
            <a href="./acomodacoes/index-quintalpisc.html"> <button class="but-pisc">Apartamento Quintal
                    Piscina</button></a>
        </div>


        <div class="items-2">
            <div class="item">
                <img src="./homepage/img-homepage/bangluxo .jpg">
                <br>
                <a href="./acomodacoes/index-luxo.html"> <button class="but-luxo">Bangalô Luxo</button></a>
            </div>
        </div>
        <div class="items-2">
            <div class="item">
                <img src="./homepage/img-homepage/bangsuper .jpg" class="img-super">
                <br>
                <a href="./acomodacoes/index-super.html"> <button class="but-super">Bangalô Super Luxo</button></a>
            </div>
        </div>
        </div>
    </section>
    <section>

        <div class="title-2">
            <p> Estrutura </p>
            <a name="estrutura">
                <div class="logo-2">
                    <img src="./homepage/img-homepage/logourbano.png">
                </div>
        </div>
        </a>
    </section>

    <section class="items-estrutura">

        <div class="item-estru">

            <img src="./homepage/img-homepage/gastronomia .jpg">
            <br>
            <a href="./estrutura/gastronomia.html"> <button class="but-gastro">Gastronomia</button></a>
        </div>

        <div class="item-estru">

            <img src="./homepage/img-homepage/aquatico.jpg">
            <br>
            <a href="./estrutura/parque.html"> <button class="but-parq">Parque Aquático</button></a>
        </div>

        <div class="item-estru">
            <img src="./homepage/img-homepage/SPA.png">
            <br>

            <a href="./estrutura/spa.html"> <button class="but-spa">SPA Urbano</button></a>

        </div>
    </section>

    <section class="acomod">
        <div class="flip-box">
            <div class="front">
                <img src="./homepage/img-homepage/acomod.jpg">
            </div>
            <div class="back">
                <img src="./homepage/img-homepage/acomod2.jpg">
            </div>
        </div>

        <div class="title-3">
            <p>Acomodações</p>
        </div>
    </section>
    <br>

    <section class="desc">
        <div class="title-4">
            <p>Apartamentos e bangalôs amplos e confortáveis ​​que convidam ao descanso e à contemplação</p>
        </div>
        <div class="text-acomod">
            <h4>
                <center>Nosso hotel possui 40 confortáveis apartamentos, 20 deles podem acomodar até quatro pessoas. Nos
                    demais,
                    a configuração pode ser casal ou triplo. Nossas confortáveis camas box de casal têm a dimensão de
                    1.60m
                    x 2m. As de solteiro, 0.80m x 2m. Todos oferecem uma boa rede na varanda que convida ao descanso e à
                    contemplação. </center>
                <center>Também possuem telefone, frigobar,
                    ar-condicionado split, tv a cabo, banheiro com água
                    quente, secador de cabelo e cofre digital. Dez desses apartamentos possuem uma categoria
                    diferenciada.
                    São nossos Standard Quintal. </center> vez da varanda, têm um charmoso quintal com balanço rústico
                para seus
                momentos intimistas de descanso e acomodam até três pessoas.
                O Hotel Urbano também conta com dez
                bangalôs para quem curte uma hospedagem mais privada.<center> Oferecemos wifi grátis
                    em todas as dependências do
                    hotel.</center>

            </h4>
        </div>
    </section>
    <section class="acomod-2">
        <div class="acomod-standard">
            <img src="./homepage/img-homepage/standard2.jpg">
            <div class="title-5">
                <p>Standard</p>
                <a href="http://localhost/hotelurbano/reservas/reservas.php/#standard"><button>Faça sua reserva</button></a>
            </div>
        </div>
        <div class="acomod-quintal">
            <img src="./homepage/img-homepage/quintal2.jpg">
            <div class="title-6">
                <p>Quintal</p>
                <a href="http://localhost/hotelurbano/reservas/reservas.php/#quintal"><button>Faça sua reserva</button></a>
            </div>
        </div>
        <div class="acomod-quintalpisc">
            <img src="./homepage/img-homepage/quintalpisc.jpg">
            <div class="title-7">
                <p>Quintal Piscina </p>
                <a href="http://localhost/hotelurbano/reservas/reservas.php/#pisc"><button>Faça sua reserva</button></a>
            </div>
        </div>
        <div class="acomod-quintalfam">
            <img src="./homepage/img-homepage/quintafam.jpg">
            <div class="title-8">
                <p>Quintal família </p>
                <a href="http://localhost/hotelurbano/reservas/reservas.php/#fam"><button>Faça sua reserva</button></a>
            </div>
        </div>

        <div class="acomod-luxo">
            <img src="./homepage/img-homepage/bangaloluxo.jpg">
            <div class="title-9">
                <p> Bangalô luxo </p>
                <a href="http://localhost/hotelurbano/reservas/reservas.php/#luxo"><button>Faça sua reserva</button></a>
            </div>
        </div>
        </div>
        </div>
        <div class="acomod-super">
            <img src="./homepage/img-homepage/bangalosuper.jpg">
            <div class="title-10">
                <p> Bangalô super luxo </p>
                <a href="http://localhost/hotelurbano/reservas/reservas.php/#super"><button>Faça sua reserva</button></a>
            </div>
        </div>

    </section>
    <section class="loc">
        <div class="title-11">
            <p> Localização </p>
            <img src="./homepage/img-homepage/logourbano.png">
        </div>
        <div class="loc-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!4v1681005193334!6m8!1m7!1sCAoSLEFGMVFpcE94NzVIY1hILUFsRHBzRW5MbUJzUXhsX1V6VWF1b2J0aWUtMmlk!2m2!1d-3.726090159833122!2d-38.49316013772113!3f147.99843680131016!4f11.24590885371596!5f0.4000000000000002"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="loc-frame-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7962.767555539361!2d-38.49319500000001!3d-3.7262190000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7487054133acf%3A0x4c671d175a339b23!2sAv.%20Beira%20Mar%2C%203080%20-%20Meireles%2C%20Fortaleza%20-%20CE%2C%2060165-120%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1681005321280!5m2!1spt-BR!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="rod-footer">
        <a href="https://instagram.com/hotelurbano.an?igshid=YmMyMTA2M2Y=" target="_blank">
            <img src="./homepage/img-homepage/instagram.png">
        </a>
        <footer>

            Av. Beira Mar, 3080 - Meireles, Fortaleza - CE, 60168-121, Brasil
            85 6011-8888 | 85 7011-9999 | reservahotelurbano@gmail.com
          <div class = "central-adm">
            <a href="http://localhost/hotelurbano/administrador/login.php"> Central Administrativa</a>
          </div>
                     
        </footer>
    </section>
    <script src="./script-homepage.js"></script>



</body>

</html>