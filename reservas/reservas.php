<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style-reservas.css">
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
                    <img src="./img-reservas/acomod-stan.png">

                    <div class="title-1">
                        <p>Standard.</p>
                    </div>
                    <div class="text-1">
                        <h4>Standard – Apartamentos single, duplo, triplo ou quádruplo. Todos estão equipados com
                            telefone,
                            frigobar, cama box casal tamanho 1.60m x 2.00m, ar condicionado tipo split, televisão tela
                            plana, tv
                            a cabo, banheiro com ducha de água quente, secador de cabelo, cofre digital e uma agradável
                            rede na
                            varanda.</h4>
                    </div>
                    <div class="grupo">
                        <img src="./img-reservas/grupo.png">
                        <p>Ocup.max: 4 pessoas</p>
                    </div>
                    <div class="flores">
                        <img src="./img-reservas/flores.png">
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
                            <p>R$ 880,00</p>
                            <span>Impostos e tarifas não inclusos.
                            </span>
                        </div>

                        <div class="but-1">
                            <input type="button" value="Escolher">
                        </div>

                        <div class="oferta-2">

                            <p>Standard Meia Pensão</p>
                            <ul>
                                <li>Permite cancelamento;</li>
                                <li>Café da manhã;</li>
                                <li>Internet Wifi.</li>
                            </ul>
                            <div class="valor-1">
                                <p>R$ 980,00</p>
                                <span>Impostos e tarifas não inclusos.
                                </span>
                            </div>

                            <div class="but-1">
                                <input type="button" value="Escolher">
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
                            <p>R$ 1050,00</p>
                            <span>Impostos e tarifas não inclusos.
                            </span>
                        </div>

                        <div class="but-1">
                            <input type="button" value="Escolher">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </section>

    <section class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
        <div class="standard-container">
            <img src="./img-reservas/apartamentos-quintal.jpg">

            <div class="title-0">
                <p>Apartamento Quintal.</p>
            </div>
            <div class="text-1">
                <h4>Standard Quintal - Todos oferecem um afetivo quintal privado com balanço rústico, chuveirão e design
                    de charme. Também possuem telefone, frigobar, ar condicionado split, tv a cabo, banheiro com água
                    quente, secador de cabelo e cofre digital.</h4>
            </div>
            <div class="grupo">
                <img src="./img-reservas/grupo.png">
                <p>Ocup.max: 3 pessoas</p>
            </div>
            <div class="flores">
                <img src="./img-reservas/flores.png">
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
                    <p>R$ 1.140,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

                <div class="but-1">
                    <input type="button" value="Escolher">
                </div>

                <div class="oferta-2">

                    <p> Apartamento Quintal Piscina Meia Pensão</p>
                    <ul>
                        <li>Permite cancelamento;</li>
                        <li>Café da manhã;</li>
                        <li>Internet Wifi.</li>
                    </ul>
                    <div class="valor-1">
                        <p>R$ 1.154,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
                        <input type="button" value="Escolher">
                    </div>
                </div>
            </div>
            <div class="oferta-3">

                <p>Apartamento Quintal Pensão completa</p>
                <ul>
                    <li>Permite cancelamento;</li>
                    <li>Café da manhã;</li>
                    <li>Internet Wifi.</li>
                </ul>
                <div class="valor-1">
                    <p>R$ 1.220,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

                <div class="but-1">
                    <input type="button" value="Escolher">
                </div>
    </section>
    <div class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
        <section class="acomod" class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
            <div class="standard-container">
                <img src="./img-reservas/apartamento-pisc.jpg">

                <div class="title-2">
                    <p>Apartamento Quintal Piscina.</p>
                </div>
                <div class="text-1">
                    <h4>Apartamento Standard Quintal Piscina - Contam com uma confortável cama box de casal (1.60m x 2m), um afetivo jardim privado com balanço rústico e vistas pra piscina, além de um pequeno quintal interno, com chuveirão. O design de charme está em toda parte, inclusive no exclusivo banheiro panorâmico para o quintal interno. Também possuem telefone, frigobar, ar condicionado split, tv a cabo, banheiro com água quente, secador de cabelo e cofre digital.</h4>
                </div>
                <div class="grupo">
                    <img src="./img-reservas/grupo.png">
                    <p>Ocup.max: 2 pessoas</p>
                </div>
                <div class="flores">
                    <img src="./img-reservas/flores.png">
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
                        <p>R$ 1.140,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
                        <input type="button" value="Escolher">
                    </div>

                    <div class="oferta-2">

                        <p> Apartamento Quintal Piscina Meia Pensão</p>
                        <ul>
                            <li>Permite cancelamento;</li>
                            <li>Café da manhã;</li>
                            <li>Internet Wifi.</li>
                        </ul>
                        <div class="valor-1">
                            <p>R$ 1.260,00</p>
                            <span>Impostos e tarifas não inclusos.
                            </span>
                        </div>

                        <div class="but-1">
                            <input type="button" value="Escolher">
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
                        <p>R$ 1.315,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
                        <input type="button" value="Escolher">
                    </div>

        </section>
    </div>

    <section class="produto" data-budget="0-2000" data-cancellation="permite-cancelamento">
        <div class="standard-container">
            <img src="./img-reservas/apartamentos-fam.jpg">

            <div class="title-3">
                <p>Apartamento Quintal Família.</p>
            </div>
            <div class="text-2">
                <h4>Apartamento Quintal Família - Amplos e confortáveis apartamentos para o descanso da sua família.
                    Nosso hotel possui 10 charmosos e amplos apartamentos na categoria "Quintal Família", que acomodam
                    com muito conforto até quatro pessoas. Contam com uma cama box de casal (1.60m x 2m) e duas de
                    solteiro (0.80m x 2m). Oferecem um afetivo quintal privado com balanço rústico, chuveirão e design
                    de charme, além de uma varanda com vista para os jardins. Também possuem telefone, frigobar,
                    ar-condicionado Split, Tv a cabo, banheiro com água quente, secador de cabelo e cofre digital.</h4>
            </div>
            <div class="grupo">
                <img src="./img-reservas/grupo.png">
                <p>Ocup.max: 4 pessoas</p>
            </div>
            <div class="flores">
                <img src="./img-reservas/flores.png">
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
                    <p>R$ 1.100,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

                <div class="but-1">
                    <input type="button" value="Escolher">
                </div>

                <div class="oferta-2">

                    <p> Apartamento Quintal Família Meia Pensão</p>
                    <ul>
                        <li>Permite cancelamento;</li>
                        <li>Café da manhã;</li>
                        <li>Internet Wifi.</li>
                    </ul>
                    <div class="valor-1">
                        <p>R$ 1.250,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
                        <input type="button" value="Escolher">
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
                    <p>R$ 1.315,00</p>
                    <span>Impostos e tarifas não inclusos.
                    </span>
                </div>

                <div class="but-1">
                    <input type="button" value="Escolher">
                </div>
            </div>
    </section>

    </div>


    
        <section class="acomod" data-budget="0-2000" data-cancellation="reembolsavel">
            <div class="produto" data-budget="0-2000" data-cancellation="reembolsavel">
            <div class="standard-container">
                <img src="./img-reservas/bangaloluxo2 .jpg">

                <div class="title-4">
                    <p>Bangalô Luxo.</p>
                </div>
                <div class="text-3">
                    <h4>Bangalô Luxo Nossos cinco bangalôs luxo ficam de frente pro mar paradisíaco de Fortaleza e foram
                        recentemente reformados, ganhando detalhes de charme, como peças exclusivas de artesanato
                        cearense, cama com dossel, uma aprazível jacuzzi privada na varanda e um balanço de madeira
                        rústica para sentir passar o tempo apreciando a sensacional paisagem. Área do quarto: Parte
                        interna 27,50 m² Parte externa ( Varanda) 28 m² No terraço privado, espreguiçadeiras para
                        relaxar. Todos os bangalôs luxo estão equipados com televisão LCD 32″, tv a cabo, telefone,
                        frigobar, cama box casal (1.80m x 2m), ar-condicionado tipo split, banheiro com ducha de água
                        quente, secador de cabelos e cofre digital. Sob a cama de casal, há duas camas de solteiro que
                        acomodam, com todo conforto, mais duas pessoas.</h4>
                </div>
                <div class="grupo">
                    <img src="./img-reservas/grupo.png">
                    <p>Ocup.max: 2 pessoas</p>
                </div>
                <div class="flores">
                    <img src="./img-reservas/flores.png">
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
                        <p>R$ 1.800,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
                        <input type="button" value="Escolher">
                    </div>

                    <div class="oferta-2">

                        <p> Bangalô Luxo Meia Pensão</p>
                        <ul>
                            <li>Não reembolsável;</li>
                            <li>Café da manhã;</li>
                            <li>Internet Wifi.</li>
                        </ul>
                        <div class="valor-1">
                            <p>R$ 1.850,00</p>
                            <span>Impostos e tarifas não inclusos.
                            </span>
                        </div>

                        <div class="but-1">
                            <input type="button" value="Escolher">
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
                        <p>R$ 1.930,00</p>
                        <span>Impostos e tarifas não inclusos.
                        </span>
                    </div>

                    <div class="but-1">
                        <input type="button" value="Escolher">
                    </div>
              
            </section>
   
            <section class="acomod" data-budget="2000-3500" data-cancellation="reembolsavel">
                <div class="produto" data-budget="2000-3500" data-cancellation="reembolsavel">
                <div class="standard-container" data-budget="2000-3500" data-cancellation="reembolsavel">
    
                        <img src="./img-reservas/bangalosuperluxo.jpg">
    
                        <div class="title-5">
                            <p>Bangalô Super Luxo.</p>
                        </div>
                        <div class="text-3">
                            <h4>Bangalô Luxo o são as acomodações mais sofisticadas do nosso hotel. Recebem, com todo
                                conforto, até
                                três pessoas e possuem primeiro andar. Todos os exclusivos detalhes da arquitetura e
                                decoração são
                                de charme, desde as garimpadas peças do artesanato cearense e da escada com acabamento feito
                                à mão,
                                a partir de madeira de demolição, à roupa de cama ou mobiliário. No térreo, uma bicama
                                acomoda, com
                                todo conforto, duas pessoas. Um banheiro com ducha proporciona um aprazível banho. Um lavabo
                                decorado com muito carinho e sofisticação agrega ainda mais charme. Os amenities são
                                L’Occitane.
                                Duas smart tvs de 50 polegadas garantem entretenimento no térreo e primeiro andar, onde uma
                                confortável cama box casal (1.80m x 2m) com dossel dá vista para o mar azul e para a
                                incrível
                                piscina privativa com hidromassagem. Um banheiro de apoio (sem ducha) proporciona o conforto
                                dos
                                hóspedes do primeiro andar, sobretudo durante a noite. Sem dúvida, uma experiência única em
                                Fortaleza. Área do quarto Parte interna térreo 24 m² Parte varanda térreo 21 m² parte
                                superior
                                interna 17 m² Parte superior varanda 18 m².</h4>
                        </div>
                        <div class="grupo">
                            <img src="./img-reservas/grupo.png">
                            <p>Ocup.max: 4 pessoas</p>
                        </div>
                        <div class="flores">
                            <img src="./img-reservas/flores.png">
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
                                <p>R$ 2.150,00</p>
                                <span>Impostos e tarifas não inclusos.
                                </span>
                            </div>
    
                            <div class="but-1">
                                <input type="button" value="Escolher">
                            </div>
    
                            <div class="oferta-2">
    
                                <p> Bangalô Super Luxo Meia Pensão</p>
                                <ul>
                                    <li>Não reembolsável;</li>
                                    <li>Café da manhã;</li>
                                    <li>Internet Wifi.</li>
                                </ul>
                                <div class="valor-1">
                                    <p>R$ 2.350,00</p>
                                    <span>Impostos e tarifas não inclusos.
                                    </span>
                                </div>
    
                                <div class="but-1">
                                    <input type="button" value="Escolher">
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
                                <p>R$ 2.530,00</p>
                                <span>Impostos e tarifas não inclusos.
                                </span>
                            </div>
    
                            <div class="but-1">
                                <input type="button" value="Escolher">
                            </div>
                        </div>
                    </div>
                  
                  
                </section>




            <script src="script.js"></script>
</body>

</html>