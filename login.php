<?php
include ('header.php');
      ?>

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

<?php
include ('footer.php');
      ?>






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