<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - TAGS META
  -->
  <title>Naturalle</title>
  <meta name="title" content="Naturalle- restaurante vegano e vegetariano">
  <meta name="description" content="">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


  <!-- 
    - ICON DA PÁGINA
  -->
  <link rel="shortcut icon" href="logoNaturalle.svg" type="image/svg+xml">

  <!-- 
    -FONTES
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - LINK CSS
  -->
  <link rel="stylesheet" href="./assets/css/style2.css">
 
  <!-- 
    - PRÉ IMAGENS ANTES DE CARREGAR
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Naturalle</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Restaurante Naturalle, São Paulo 123
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Funcionamento : 11:00 às 21:00 </span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>


      <div class="separator"></div>

      <a href="mailto:booking@restaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">naturalle@gmail.com</span>
      </a>

    </div>
  </div>
  <main>
    <article>
        <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/Salada3.png')" aria-label="testimonials">
        <div class="container">

          <div class="quote"></div>

          <p class="headline-2 testi-text">
            
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

  

        </div>
      </section>



  <!-- 
    - #HEADER
  -->
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="assets/images/LogoBrancaNaturalle.png" width="200" height="50" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#Menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menu</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#sobre nós" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Sobre nós</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Nosso Projeto</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Delivery</span>
            </a>
          </li>

        </ul>


        <div class="text-center">
          <p class="headline-1 navbar-title"></p>

          <address class="body-4">
            Restaurant St, Delicious City, <br>
            London 9578, UK
          </address>

          <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@grilli.com</a>

          <div class="separator"></div>

          <p class="contact-label">Booking Request</p>

          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
            +88-123-123456
          </a>
        </div>

      </nav>

      <a href="login.html" class="btn btn-secondary">
        <span class="text text-1">Cadastrar ONG</span>

        <span class="text text-2" aria-hidden="true">Login</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
</section>

<!-- 
    - #FORMULARIO
  -->
<div class="container">
  <br>
  <h2 class="headline-1 text-center">Cadastre sua ONG</h2>
  <form id="ongForm" action="conexaoONG.php" method="POST" class="form-left" novalidate>
      <div class="input-wrapper">
          <label for="exampleFormControlInput1" class="form-label">Nome</label>
          <input type="text" id="nomeONG" name="nomeONG" placeholder="Nome da ONG" autocomplete="off" class="input-field" required>
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" id="email" name="email" placeholder="nome@email.com" autocomplete="off" class="input-field" required>
         
         
    <label for="exampleFormControlInput1" class="form-label">Celular</label>
          <input type="text" id="telefone" name="telefone" placeholder="(99)99999-9999" size="20" maxlength="14" onkeypress="mascara(this)" autocomplete="off" class="input-field" required>
          
      
 
        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
    <input type="text" id="cep" name="cep" placeholder="CEP" autocomplete="off" class="input-field" required>
    <input type="text" id="rua" name="rua" placeholder="Rua" autocomplete="off" class="input-field" required>
    <input type="text" id="bairro" name="bairro" placeholder="Bairro" autocomplete="off" class="input-field" required>
    <input type="text" id="cidade" name="cidade" placeholder="Cidade" autocomplete="off" class="input-field" required>
    <input type="text" id="estado" name="estado" placeholder="Estado" autocomplete="off" class="input-field" required>

   
<label for="exampleFormControlInput1" class="form-label">CNPJ</label>
    <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00" autocomplete="off" class="input-field" required maxlength="14">

   
<label for="exampleFormControlInput1" class="form-label">Escolha o tipo de ONG:</label>
      <div class="input-wrapper">
          <div class="icon-wrapper">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              <select id="tipo_ong" name="tipo_ong" class="input-field" required>
                 
                  <option value="Saúde">Saúde</option>
                  <option value="Ambiental">Ambiental</option>
                  <option value="Direitos Humanos">Direitos Humanos</option>
                  <option value="Educação">Educação</option>
                  <option value="Desenvolvimento Comunitário">Desenvolvimento Comunitário</option>
                  <option value="Ajuda Humanitária">Ajuda Humanitária</option>
                  <option value="Cultural e Artística">Cultural e Artística</option>
                  <option value="Bem-Estar Animal">Bem-Estar Animal</option>
                  <option value="Alívio à Pobreza">Alívio à Pobreza</option>
                  <option value="Tecnologia e Inovação Social">Tecnologia e Inovação Social</option>
              </select>
              <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
          </div>
      </div>
      <label for="exampleFormControlInput1" class="form-label">Observações</label>
      <textarea id="observacoes" name="observacoes" placeholder="Insira seu texto aqui" autocomplete="off" class="input-field"></textarea>
      <button type="submit" class="btn btn-secondary">
          <span class="text text-1">Cadastrar ONG</span>
          <span class="text text-2" aria-hidden="true">Cadastrar ONG</span>
      </button>
  </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




        <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

        <h2 class="headline-1 text-center">Contate-nos </h2>

<p class="contact-label">Telefone:</p>

<a href="tel:+88123123456" class="body-1 contact-number hover-underline">(11)981765432</a>

<div class="separator"></div>

<p class="contact-label">Localização:</p>

<address class="body-4">
  Restaurant Naturalle, São Paulo, <br>
   123, SP
</address>

<p class="contact-label">Almoço:</p>

<p class="body-4">
  Terça à Domingo<br>
  11:00h - 16:30h
</p>

<p class="contact-label">Jantar:</p>

<p class="body-4">
Terça à Domingo <br>
  17:00h - 23:30h
</p>

</div>

</div>

</div>
</section>

<script src="./assets/js/scripts.js"></script>


<!-- 
- #FOOTER
-->

<footer class="footer section has-bg-image text-center"
style="background-image: url('./assets/images/Fotter2.jpeg')">
<div class="container">

<div class="footer-top grid-list">

<div class="footer-brand has-before has-after">

<a href="#" class="logo">
  <img src="./assets/images/LogoBrancaNaturalle.png" width="270" height="80" loading="lazy" alt="grilli home">
</a>

<address class="body-4">
  Restaurante Naturalle, São Paulo 123
</address>

<a href="emailto:booking@grilli.com" class="body-4 contact-link">naturalle@gmail.com</a>

<a href="tel:+000000000" class="body-4 contact-link">Telefone: (11)981765432</a>

<p class="body-4">
  Funcionamento: 11:00 às 23:30 
</p>

<div class="wrapper">
  <div class="separator"></div>
  <div class="separator"></div>
  <div class="separator"></div>
</div>

<p class="title-1">Cadastre-se e ganhe</p>

<p class="label-1">
  Cadastre-se e Ganhe <span class="span">25% Off</span>
</p>

</div>

<ul class="footer-list">

<li>
  <a href="#" class="label-2 footer-link hover-underline">Home</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Menu</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Sobre nós</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Nosso Projeto</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Delivery</a>
</li>

</ul>

<ul class="footer-list">

<li>
  <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Google Maps</a>
</li>

</ul>

</div>

<div class="footer-bottom">



</div>

</div>
</footer>





<!-- 
- #VOLTAR PARA O INÍCIO
-->

<a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
<ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>





<!-- 
- LINK JS
-->
<script src="./assets/js/script.js"></script>
<script src="./assets/js/validadorong.js"></script>
<script src="./assets/js/funcoesAPIong.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>





<!-- 
- LINKS
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>