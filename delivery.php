<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS-->
    <link rel="stylesheet" href="assets/css/delivery.css">
    <!-- FONTE -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
    <!-- ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Delivery</title>
</head>
<body>
    <!--HEADER-->
    <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="fas fa-shopping-cart"></span></label>

    <h3 class="logo">NATURALLE</h3>
    <!--SIDEBAR-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <span class="fas fa-search"></span>
            <a href="#">Pesquisar</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-home"></span>
            <a href="#">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-heart"></span>
            <a href="#">Favoritos</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-user"></span>
            <a href="#">Perfil</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-sliders-h"></span>
            <a href="#">Configurações</a>
        </div>
    </div>

    <!-- DASHBOARD -->
    <div class="dashboard">
        <div class="dashboard-banner">
            <img src="assets/imagesdelivery/alimento-verde-saudavel-da-bacia-de-buddha-do-vegetariano-com-ovos-arroz-tomate-abacate-e-queijo-azul-na-tabela.jpg">
            <div class="banner-promo">
                <h1><span>50% de desconto</span><br>
                    Comida saborosa <br>Na suas mãos</h1>
            </div>
        </div>
        
        <h3 class="dashboard-title">Recomendados para você</h3>
        <div class="dashboard-menu">
            <a href="#">Favoritos</a>
            <a href="#">Mais vendido</a>
            <a href="#">Perto de mim</a>
            <a href="#">Promoções</a>
            <a href="#">Melhor classificado</a>
            <a href="#">Todos</a>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-card">
                <img class="card-image" src="assets/imagesdelivery/MIX DE LEGUMES.jpg">
                <div class="card-detail">
                    <h4>POKE BOWL DE LEGUMES<span>$45</span></h4>
                    <p>Mix de Legumes incluindo brócolis, cenoura, abobrinha, pimentão e tomate</p>
                    <p class="card-time"><span class="fas fa-clock"></span>15-30 min</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="assets/imagesdelivery/tiras-de-carne-ao-molho-chines-768x768.png">
                <div class="card-detail">
                    <h4>TIRAS DE CARNE 100% VEGETAL<span>$45</span></h4>
                    <p>Tiras de carne 100% vegetal servidas ao molho</p>
                    <p class="card-time"><span class="fas fa-clock"></span>15-30 min</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="assets/imagesdelivery/strogonoff-com-frango-vegetal-768x768.png">
                <div class="card-detail">
                    <h4>STROGONOFF VEGANO<span>$45</span></h4>
                    <p>Frango em cubos 100% vegetal , acompanhado de arroz e batata palha</p>
                    <p class="card-time"><span class="fas fa-clock"></span>15-30 min</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="assets/imagesdelivery/bife-com-batata-e-legumes-768x512.png">
                <div class="card-detail">
                    <h4>FILET VEGANO GRELHADO<span>$45</span></h4>
                    <p>Bife bovino 100% vegetal, acompanha legumes refogados e batata noise</p>
                    <p class="card-time"><span class="fas fa-clock"></span>15-30 min</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="assets/imagesdelivery/hamburguer-de-carne-grelhada-em-uma-placa-de-madeira-com-legumes-frescos-gerados-por-inteligencia-artificial_188544-69924.jpg">
                <div class="card-detail">
                    <h4>HAMBURGUINHO VEGANO<span>$45</span></h4>
                    <p>2 Hambúrgueres 100% vegetal de 120 gramas , acompanhado batata frita</p>
                    <p class="card-time"><span class="fas fa-clock"></span>15-30 min</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="assets/imagesdelivery/macarrao.jpg">
                <div class="card-detail">
                    <h4>MACARRÃO AO MOLHO BRANCO VEGANO
                        <span>$45</span></h4>
                    <p>Penne sem ovos ao molho branco feito com castanha de caju, acompanhado de brócolis</p>
                    <p class="card-time"><span class="fas fa-clock"></span>15-30 min</p>
                </div>
            </div>
        </div>
    </div>

    <!-- PEDIDO -->
    <div class="dashboard-order">
        <h3>Carrinho</h3>
        <div class="order-address">
            <p>Endereço Delivery</p>
            <h4> Av.Oscar Freire,211, São Paulo</h4>
        </div>
        <div class="order-time">
            <span class="fas fa-clock"></span> 30 mins <span class="fas fa-map-marker-alt"></span> 2 km
        </div>

        <div class="order-wrapper">
            <div class="order-card">
                <img class="order-image" src="assets/imagesdelivery/tiras-de-carne-ao-molho-chines-768x768.png">
                <div class="order-detail">
                    <p>TIRAS DE CARNE 100% VEGETAL</p>
                    <i class="fas fa-times"></i> <input type="text" value="1">
                </div>
                <h4 class="order-price">$35</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="assets/imagesdelivery/strogonoff-com-frango-vegetal-768x768.png">
                <div class="order-detail">
                    <p>STROGONOFF VEGANO</p>
                    <i class="fas fa-times"></i> <input type="text" value="2">
                </div>
                <h4 class="order-price">$40</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="assets/imagesdelivery/bife-com-batata-e-legumes-768x512.png">
                <div class="order-detail">
                    <p>FILET VEGANO GRELHADO</p>
                    <i class="fas fa-times"></i> <input type="text" value="3">
                </div>
                <h4 class="order-price">$23</h4>
            </div>
        </div>
        <hr class="divider">
        <div class="order-total">
            <p>Subtotal <span>$100</span></p>
            <p>Taxa de Serviço (10%) <span>$15.60</span></p>
            <p>Taxa de Entrega <span>$5.00</span></p>

            <div class="order-promo">
                <input class="input-promo" type="text" placeholder="Calcular Desconto">
                <button class="button-promo">Calcular</button>
            </div>
            <hr class="divider">
            <p>Preço Total <span>$120.6</span></p>
        </div>
        <button class="checkout">
            Confirmar
        </button>


    </div>
</body>
</html>

