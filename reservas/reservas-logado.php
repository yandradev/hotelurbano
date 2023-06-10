<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://localhost/hotelurbano/reservas/style-reservas.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
</head>

<body>
    <div class="filtro">
        <h4>Filtrar</h4>
    </div>
    <section class="filtrar">

        <label class="label-1">Seu orçamento:</label>
        <br>
        <input type="checkbox" id="budget-0-2000" value="0-2000" class="budget">
        <label class="checkbox" for="budget-0-2000">R$ 0,00 - R$ 2.000,00</label>
        <br>
        <input type="checkbox" id="budget-2000-3500" value="2000-3500" class="budget">
        <label class="checkbox" for="budget-2000-3500">R$ 2.000,00 - R$ 3.500,00</label>
        <br>
        <input type="checkbox" id="budget-2000-3500" value="3500-5000" class="budget">
        <label class="checkbox" for="budget-2000-3500">R$ 3.500,00 - R$ 5.000,00</label>
        <br><br>


        <label class="label-2">Cancelamento:</label>
        <br>
        <input type="checkbox" id="cancellation-reembolsavel" value="reembolsavel" class="cancellation">
        <label class="checkbox" for="cancellation-reembolsavel"> Não reembolsável</label>
        <br>
        <input type="checkbox" id="cancellation-permite-cancelamento" value="permite-cancelamento" class="cancellation">
        <label class="checkbox" for="cancellation-permite-cancelamento">Permite cancelamento</label>
        <br><br>

        <button id="btn-filtrar" class="btn-filtrar">Aplicar filtro</button>
    </section>
    <div id="resultados">

    </div>


    <!-- Produtos -->

    <div id="produtos">

        <div class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
            <section class="acomod" class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
                <div class="standard-container">
                    <img src="http://localhost/hotelurbano/reservas/img-reservas/acomod-stan.png" id="standard">
                    <?php
                    require_once 'conexao.php';
                        
                    session_start();
                    if (isset($_COOKIE['id_cliente'])) {
                        $id_cliente = $_COOKIE['id_cliente'];
                   
                    } else {
                        header("Location: login.php");
                        exit();
                    }
                    
                    
                  
                    $sql = "SELECT * FROM quartos WHERE id_quarto = 1";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                          
                   
                  ?>


                            <div class="title-1">
                                <p><?php echo $row["tipo_quarto"]; ?>.</p>
                            </div>
                            <div class="text-1">
                                <h4> <?php echo $row["descricao"]; ?></h4>
                            </div>
                            <div class="grupo">
                                <img src="http://localhost/hotelurbano/reservas/img-reservas/grupo.png">
                                <p>Ocup.max: <?php echo $row["ocupacao_maxima"]; ?> pessoas</p>
                            </div>
                            <div class="flores">
                                <img src="http://localhost/hotelurbano/reservas/img-reservas/flores.png">
                                <p>Vista para o jardim</p>
                            </div>
                            <div class="oferta-1">

                                <p>Standard Café da Manhã</p>
                                <ul>
                                    <li>Permite cancelamento;</li>
                                    <li>Café da manhã;</li>
                                    <li>Internet Wifi.</li>
                                </ul>
                                <div class="valor-1">
                                    <p>R$ <?php echo $row["valor_cafe"]; ?>,00</p>
                                    <span>Impostos e tarifas não inclusos.
                                    </span>
                                    <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_cafe'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>
</div>

</div>


                                <div class="oferta-2">

                                    <p>Standard Meia Pensão</p>
                                    <ul>
                                        <li>Permite cancelamento;</li>
                                        <li>Café da manhã;</li>
                                        <li>Internet Wifi.</li>
                                    </ul>
                                    <div class="valor-1">
                                        <p>R$ <?php echo $row["valor_meia"]; ?>,00</p>
                                        <span>Impostos e tarifas não inclusos.
                                        </span>
                                    </div>
                                
                       
                                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_meia'] ?>" style="text-decoration: none; ">
    <input type="button" value="Escolher">
  </a>
                                </div>                             
</div>
                            </div>
                            <div class="oferta-3">

                                <p>Standard Pensão Completa</p>
                                <ul>
                                    <li>Permite cancelamento;</li>
                                    <li>Café da manhã;</li>
                                    <li>Internet Wifi.</li>
                                </ul>
                                <div class="valor-1">
                                    <p>R$ <?php echo $row["valor_completa"]; ?>,00</p>
                                    <span>Impostos e tarifas não inclusos.
                                    </span>
                                </div>

                              
                                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_completa'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>
</div>
                            </div>
                </div>
        </div>
    </div>
    </div>
    <?php
                        }
                    } else {
                        echo "<p>Nenhum quarto encontrado.</p>";
                    }

                   
?>
</section>
<section class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
    <div class="standard-container">
        <img src="http://localhost/hotelurbano/reservas/img-reservas/apartamentos-quintal.jpg" id="quintal">
        <?php
                    $sql = "SELECT * FROM quartos WHERE id_quarto = 2";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
        <div class="title-0">
            <p><?php echo $row["tipo_quarto"]; ?>.</p>
        </div>
        <div class="text-1">
            <h4> <?php echo $row["descricao"]; ?></h4>
        </div>
        <div class="grupo">
            <img src="http://localhost/hotelurbano/reservas/img-reservas/grupo.png">
            <p>Ocup.max:  <?php echo $row["ocupacao_maxima"]; ?> pessoas</p>
        </div>
        <div class="flores">
            <img src="http://localhost/hotelurbano/reservas/img-reservas/flores.png">
            <p>Vista para o jardim</p>
        </div>
        <div class="oferta-1">

            <p>Apartamento Quintal Café da Manhã</p>
            <ul>
                <li>Permite cancelamento;</li>
                <li>Café da manhã;</li>
                <li>Internet Wifi.</li>
            </ul>
            <div class="valor-1">
                <p>R$  <?php echo $row["valor_cafe"]; ?>,00</p>
                <span>Impostos e tarifas não inclusos.
                </span>
            </div>

            <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_cafe'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>

            <div class="oferta-2">

                <p> Apartamento Quintal Meia Pensão</p>
                <ul>
                    <li>Permite cancelamento;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$  <?php echo $row["valor_meia"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_meia'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
            </div>
        </div>
        <div class="oferta-3">

            <p>Apartamento Quintal Pensão Completa</p>
            <ul>
                <li>Permite cancelamento;</li>
                <li>Café da manhã;</li>
                <li>Internet Wifi.</li>
            </ul>
            <div class="valor-1">
                <p>R$  <?php echo $row["valor_completa"]; ?>,00</p>
                <span>Impostos e tarifas não inclusos.
                </span>
            </div>

            <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_completa'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
  <?php
}
} else {
echo "<p>Nenhum quarto encontrado.</p>";
}

  
  ?>
        </section>
<div class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
    <section class="acomod" class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
        <div class="standard-container">
            <img src="http://localhost/hotelurbano/reservas/img-reservas/apartamento-pisc.jpg" id="pisc">
            <?php
                    $sql = "SELECT * FROM quartos WHERE id_quarto = 3";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <div class="title-2">
                <p> <?php echo $row["tipo_quarto"]; ?></p>
            </div>
            <div class="text-1">
                <h4>Apartamento Standard Quintal Piscina - Contam com uma confortável cama box de casal (1.60m x 2m), um afetivo jardim privado com balanço rústico e vistas pra piscina, além de um pequeno quintal interno, com chuveirão. O design de charme está em toda parte, inclusive no exclusivo banheiro panorâmico para o quintal interno. Também possuem telefone, frigobar, ar condicionado split, tv a cabo, banheiro com água quente, secador de cabelo e cofre digital.</h4>
            </div>
            <div class="grupo">
                <img src="http://localhost/hotelurbano/reservas/img-reservas/grupo.png">
                <p>Ocup.max: <?php echo $row["ocupacao_maxima"]; ?></p>
            </div>
            <div class="flores">
                <img src="http://localhost/hotelurbano/reservas/img-reservas/flores.png">
                <p>Vista para o jardim</p>
            </div>
            <div class="oferta-1">

                <p>Apartamento Quintal Piscina Café da Manhã</p>
                <ul>
                    <li>Permite cancelamento;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$  <?php echo $row["valor_cafe"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

               
                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_cafe'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>

                <div class="oferta-2">

                    <p> Apartamento Quintal Piscina Meia Pensão</p>
                    <ul>
                        <li>Permite cancelamento;</li>
                        <li>Café da manhã;</li>
                        <li>Internet Wifi.</li>
                    </ul>
                    <div class="valor-1">
                        <p>R$  <?php echo $row["valor_meia"]; ?>,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                  
                    <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_meia'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
                </div>
            </div>
            <div class="oferta-3">

                <p>Apartamento Quintal Piscina Pensão completa</p>
                <ul>
                    <li>Permite cancelamento;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$  <?php echo $row["valor_completa"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

              
                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_completa'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
   

    </section>
    <?php
        }
    } else {
        echo "<p>Nenhum quarto encontrado.</p>";
    }

    ?>
</div>

<section class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
    <div class="standard-container">
        <img src="http://localhost/hotelurbano/reservas/img-reservas/apartamentos-fam.jpg" id="fam">
        <?php
                    $sql = "SELECT * FROM quartos WHERE id_quarto = 4";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
        <div class="title-3">
            <p><?php echo $row["tipo_quarto"]; ?></p>
        </div>
        <div class="text-2">
            <h4><?php echo $row["descricao"]; ?></h4>
        </div>
        <div class="grupo">
            <img src="http://localhost/hotelurbano/reservas/img-reservas/grupo.png">
            <p>Ocup.max: <?php echo $row["ocupacao_maxima"]; ?> pessoas</p>
        </div>
        <div class="flores">
            <img src="http://localhost/hotelurbano/reservas/img-reservas/flores.png">
            <p>Vista para o jardim</p>
        </div>
        <div class="oferta-1">

            <p>Apartamento Quintal Família Café da Manhã</p>
            <ul>
                <li>Permite cancelamento;</li>
                <li>Café da manhã;</li>
                <li>Internet Wifi.</li>
            </ul>
            <div class="valor-1">
                <p>R$  <?php echo $row["valor_cafe"]; ?>,00</p>
                <span>Impostos e tarifas não inclusos.
                </span>
            </div>

            <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_cafe'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>

            <div class="oferta-2">

                <p> Apartamento Quintal Família Meia Pensão</p>
                <ul>
                    <li>Permite cancelamento;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$  <?php echo $row["valor_meia"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

              
                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_meia'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
            </div>
        </div>
        <div class="oferta-3">

            <p>Apartamento Quintal Família Pensão Completa</p>
            <ul>
                <li>Permite cancelamento;</li>
                <li>Café da manhã;</li>
                <li>Internet Wifi.</li>
            </ul>
            <div class="valor-1">
                <p>R$  <?php echo $row["valor_completa"]; ?>,00</p>
                <span>Impostos e tarifas não inclusos.
                </span>
            </div>

            <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_completa'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
        </div>
        <?php
        }
    } else {
        echo "<p>Nenhum quarto encontrado.</p>";
    }

    ?>
    </section>

</div>


<section class="acomod" data-budget="0-2000" data-cancellation="reembolsavel">
    <div class="produto" data-budget="0-2000" data-cancellation="reembolsavel">
        <div class="standard-container">
            <img src="http://localhost/hotelurbano/reservas/img-reservas/bangaloluxo2%20.jpg" id="luxo">
            <?php
                    $sql = "SELECT * FROM quartos WHERE id_quarto = 5";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <div class="title-4">
                <p><?php echo $row["tipo_quarto"]; ?></p>
            </div>
            <div class="text-3">
                <h4><?php echo $row["descricao"]; ?></h4>
            </div>
            <div class="grupo">
                <img src="http://localhost/hotelurbano/reservas/img-reservas/grupo.png">
                <p>Ocup.max: <?php echo $row["ocupacao_maxima"]; ?></p>
            </div>
            <div class="flores">
                <img src="http://localhost/hotelurbano/reservas/img-reservas/flores.png">
                <p>Vista para o jardim</p>
            </div>
            <div class="oferta-1">

                <p>Bangalô Luxo Café da Manhã</p>
                <ul>
                    <li>Não reembolsável;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$ <?php echo $row["valor_cafe"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

             
                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_cafe'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
                <div class="oferta-2">

                    <p> Bangalô Luxo Meia Pensão</p>
                    <ul>
                        <li>Não reembolsável;</li>
                        <li>Café da manhã;</li>
                        <li>Internet Wifi.</li>
                    </ul>
                    <div class="valor-1">
                        <p>R$ <?php echo $row["valor_meia"]; ?>,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_meia'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
                </div>
            </div>
            <div class="oferta-3">

                <p>Bangalô Luxo Pensão completa</p>
                <ul>
                    <li>Não reembolsável;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$ <?php echo $row["valor_completa"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

             
                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_completa'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
                <?php
        }
    } else {
        echo "<p>Nenhum quarto encontrado.</p>";
    }
?>
</section>

<section class="acomod" data-budget="2000-3500" data-cancellation="reembolsavel">
    <div class="produto" data-budget="2000-3500" data-cancellation="reembolsavel">
        <div class="standard-container" data-budget="2000-3500" data-cancellation="reembolsavel">

            <img src="http://localhost/hotelurbano/reservas/img-reservas/bangalosuperluxo.jpg" id="super">
            <?php
                    $sql = "SELECT * FROM quartos WHERE id_quarto = 6";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <div class="title-5">
                <p><?php echo $row["tipo_quarto"]; ?></p>
            </div>
            <div class="text-3">
                <h4><?php echo $row["descricao"]; ?></h4>
            </div>
            <div class="grupo">
                <img src="http://localhost/hotelurbano/reservas/img-reservas/grupo.png">
                <p>Ocup.max: <?php echo $row["ocupacao_maxima"]; ?></p>
            </div>
            <div class="flores">
                <img src="http://localhost/hotelurbano/reservas/img-reservas/flores.png">
                <p>Vista para o jardim</p>
            </div>
            <div class="oferta-1">

                <p>Bangalô Super Luxo Café da Manhã</p>
                <ul>
                    <li>Não reembolsável;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$ <?php echo $row["valor_cafe"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_cafe'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
                <div class="oferta-2">

                    <p> Bangalô Super Luxo Meia Pensão</p>
                    <ul>
                        <li>Não reembolsável;</li>
                        <li>Café da manhã;</li>
                        <li>Internet Wifi.</li>
                    </ul>
                    <div class="valor-1">
                        <p>R$ <?php echo $row["valor_meia"]; ?>,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

               
                    <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_meia'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>           
                </div>
            </div>
            <div class="oferta-3">

                <p>Bangalô Super Luxo Pensão completa</p>
                <ul>
                    <li>Não reembolsável;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$ <?php echo $row["valor_completa"]; ?>,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

              
                <div class="but-1">
  <a href="http://localhost/hotelurbano/reservas/registro.php?id_quarto=<?php echo $row['id_quarto']; ?>&valor=<?php echo $row['valor_completa'] ?>" style="text-decoration: none;">
    <input type="button" value="Escolher">
  </a>

</div>
            </div>
        </div>

        <?php
        }
    } else {
        echo "<p>Nenhum quarto encontrado.</p>";
    }

  
    ?>
</section>
<?php

 $conn->close();    
?>
<script src="http://localhost/hotelurbano/reservas/script.js"></script>
</body>

</html>