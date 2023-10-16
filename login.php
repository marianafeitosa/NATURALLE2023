<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Naturalle</title>
  <meta name="title" content="Naturalle- restaurante vegano e vegetariano">
  <meta name="description" content="">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="logoNaturalle.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style2.css">

  <!-- 
    - preload images
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
  <main>
    <article>
        <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/login1.svg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

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
          <img src="./assets/images/logo.svg" width="160" height="50" alt="Grilli - Home">
        </a>

        
        </div>

      </nav>

    </div>
  </header>
</section>
    <article>
<br>
<br>
<img src="./img/shape-6.png" class="image img-1 show" alt="" />

<!-- 
    - #FORMULARIO
  -->

  <div class="container">
          <div class="form reservation-form bg-black-10">
            <div>
              <br>
            <h1 class="headline-1 text-center">Login</h1>
            </div>
            <br>

            <form id="ongForm" action="conexaologin.php" method="POST" class="form-left" novalidate>
  
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" id="email" name="email" placeholder="nome@email.com" autocomplete="off" class="input-field" required>
              
              <label for="exampleFormControlInput1" class="form-label">Senha</label>
              <input type="password" id="senha" name="senha" placeholder="No mínimo 8 caracteres" autocomplete="off" class="input-field" required>

          <div class="input-wrapper">
            <a href="esqueciminhasenha.php" class="body-1 esqueci-senha hover-underline">Esqueci minha senha</a>
          
       

          <br>
          <button type="submit" class="btn btn-secondary">
          <span class="text text-1">Login</span>
          <span class="text text-2" aria-hidden="true">Login</span>
      </button>
         

         
        </div>
        </form>

        <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

          <h2 class="headline-1 text-center">Ainda não tem uma conta?</h2>

          <p class="contact-label">Crie uma agora.</p>

          <a href="cadastrar.PHP" class="body-1 contact-number hover-underline">Criar uma conta.</a>

          <div class="separator"></div>

  

        </div>

      </div>

    </div>
  </section>
 <br>

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
- #BACK TO TOP
-->

<a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
<ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>





<!-- 
- custom js link
-->
<script src="./assets/js/script.js"></script>
<script src="./assets/js/validadorong.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>





<!-- 
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>