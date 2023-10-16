<?php
include ('header.php');
      ?>

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
  

<!-- 
    - #FORMULARIO
  -->
<div class="container">
  <br>
  <h2 class="headline-1 text-center">Cadastre-se</h2>
  <form id="ongForm" action="conexaocadastrar.php" method="POST" class="form-left" novalidate>
      <div class="input-wrapper">
          <label for="exampleFormControlInput1" class="form-label">Nome</label>
          <input type="text" id="nome" name="nome" placeholder="Nome Completo" autocomplete="off" class="input-field" required>
        
    <label for="exampleFormControlInput1" class="form-label">Celular</label>
          <input type="text" id="telefone" name="telefone" placeholder="(99)99999-9999" size="20" maxlength="14" onkeypress="mascara(this)" autocomplete="off" class="input-field" required>
       
          <label for="exampleFormControlInput1" class="form-label">Endereço</label>
          <input type="text" id="cep" name="cep" placeholder="CEP" autocomplete="off" class="input-field" required>
          <input type="text" id="rua" name="rua" placeholder="Rua" autocomplete="off" class="input-field" required>
          <input type="text" id="bairro" name="bairro" placeholder="Bairro" autocomplete="off" class="input-field" required>
           <input type="text" id="cidade" name="cidade" placeholder="Cidade" autocomplete="off" class="input-field" required>
          <input type="text" id="estado" name="estado" placeholder="Estado" autocomplete="off" class="input-field" required>
       

          <label for="exampleFormControlInput1" class="form-label">CPF</label>
          <input type="text" id="cpf" name="cpf" placeholder=" 000.000.000-00" autocomplete="off" class="input-field" required>
          
<label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
          <input type="date" id="datanascimento" name="datanascimento" placeholder=" 000.000.000-00" autocomplete="off" class="input-field" required>
          
<label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" id="email" name="email" placeholder="nome@email.com" autocomplete="off" class="input-field" required>
          <label for="exampleFormControlInput1" class="form-label">Confirmar Email</label>
          <input type="email" id="email" name="email" placeholder="nome@email.com" autocomplete="off" class="input-field" required>
          <label for="exampleFormControlInput1" class="form-label">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="No mínimo 8 caracteres" autocomplete="off" class="input-field" required>
          
          <label for="password" class="form-label">Confirmar Senha</label>
          <input type="password" id="senha" name="senha" placeholder="" autocomplete="off" class="input-field" required>
          <div class="form-check">
          <div class="form-check">
    <input class="form-check-input" type="checkbox" value="newsletter" id="newsletter">
    <label class="form-check-label" for="newsletter">
        <span class="checkbox-text">Gostaria de receber as novidades da Naturalle por email.</span>
    </label>
</div>
<br>
      <button type="submit" class="btn btn-secondary">
          <span class="text text-1">Cadastre-se</span>
          <span class="text text-2" aria-hidden="true">Cadastre-se</span>
      </button>
  </form>
</div>


<!-- 
    - LINKS
  -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!-- 
    - FOOTER COM IMAGENS
  -->
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

<?php
include ('footer.php');
      ?>


<!-- 
- VOLTAR PARA O ÍNICIO
-->

<a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
<ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>





<!-- 
- LINKS JS
-->
<script src="./assets/js/script.js"></script>
<script src="./assets/js/validadorong.js"></script>
<script src="./assets/js/funcoesAPIcadastro.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>





<!-- 
- LINKS
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>