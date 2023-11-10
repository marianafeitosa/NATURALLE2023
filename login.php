<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Font Awesome CDN link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="assets/css/style.css">

   <script src="validador.js"></script>
</head>
<body>

<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email, $pass]);
   $rowCount = $stmt->rowCount();

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if ($rowCount > 0) {
      if ($row['user_type'] == 'admin') {
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');
      } elseif ($row['user_type'] == 'user') {
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');
      } else {
         $message[] = 'no user found!';
      }
   } else {
      $message[] = 'incorrect email or password!';
   }
}
?>

<section class="section testi text-center has-bg-image" style="background-image: url('./assets/images/login1.svg')" aria-label="testimonials">
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

<article>
   <br>
   <br>
   <img src="./img/shape-6.png" class="image img-1 show" alt="" />

   <?php
   include('header.php');
   ?>

<section class="container">
        <div class="form reservation-form bg-black-10">
            <div>
                <br>
                <h1 class="headline-1 text-center">Login</h1>
            </div>
            <br>
            <form action="" method="POST" class="form-left">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="input-field" placeholder="nome@email.com" autocomplete="off" required>
                <label for="pass" class="form-label">Senha</label>
                <input type="password" name="pass" id="pass" class="input-field" placeholder="No mínimo 8 caracteres" autocomplete="off" required>
                <div class="input-wrapper">
                    <a href="esqueciminhasenha.php" class="body-1 esqueci-senha hover-underline">Esqueci minha senha</a>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-secondary">
                    <span class="text text-1">Login</span>
                    <span class="text text-2" aria-hidden="true">Login</span>
                </button>
            </form>
            <div class="form-right text-center" style="">
                <h2 class="headline-1 text-center">Ainda não tem uma conta?</h2>
                <p class="contact-label">Crie uma agora.</p>
                <a href="cadastrar.php" class="body-1 contact-number hover-underline">Criar uma conta.</a>
                <div class="separator"></div>
                <div id="error-message" class="error-message"></div>
            </div>
        </div>
    </section>


<br>


<?php
include('footer.php');
?>

<!-- BACK TO TOP -->
<a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
   <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>

<!-- JS scripts -->
<script src="./assets/js/script.js"></script>
<script src="./assets/js/validadorong.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
