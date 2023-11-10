<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location: login.php');
}

if (isset($_POST['order'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $method = $_POST['method'];
    $method = filter_var($method, FILTER_SANITIZE_STRING);
    $ong = $_POST['ong'];
    $ong = filter_var($ong, FILTER_SANITIZE_STRING);
    $address = 'flat no. ' . $_POST['flat'] . ' ' . $_POST['street'] . ' ' . $_POST['city'] . ' ' . $_POST['state'] . ' ' . $_POST['country'] . ' - ' . $_POST['pin_code'];
    $address = filter_var($address, FILTER_SANITIZE_STRING);
    $placed_on = date('d-M-Y');
    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
    $cart_query->execute([$user_id]);
    if ($cart_query->rowCount() > 0) {
        while ($cart_item = $cart_query->fetch(PDO::FETCH_ASSOC)) {
            $cart_products[] = $cart_item['name'] . ' ( ' . $cart_item['quantity'] . ' )';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ', $cart_products);

    $order_query = $conn->prepare("SELECT * FROM `orders` WHERE name = ? AND number = ? AND email = ? AND method = ? AND address = ? AND total_products = ? AND total_price = ?");
    $order_query->execute([$name, $number, $email, $method, $address, $total_products, $cart_total]);

    if ($cart_total == 0) {
        $message[] = 'Seu carrinho está vazio';
    } elseif ($order_query->rowCount() > 0) {
        $message[] = 'Pedido já feito!';
    } else {
        // Adicione o campo de pontos usados no formulário
        $pontos_usados = $_POST['pontos_usados'] ?? 0;

        // Deduza os pontos usados do valor total do pedido
        $cart_total -= $pontos_usados;

        // Atualize a tabela "users" com os pontos usados
        $update_points_used = $conn->prepare("UPDATE users SET pontos_usados = ? WHERE id = ?");
        $update_points_used->execute([$pontos_usados, $user_id]);

        $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES(?,?,?,?,?,?,?,?,?)");
        $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $cart_total, $placed_on]);
        $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
        $delete_cart->execute([$user_id]);

        // Sistema de pontos
        $bonus_percentage = 0.20; // 20% a mais em pontos
        $points_earned = ($cart_total + ($cart_total * $bonus_percentage));
        $update_points = $conn->prepare("UPDATE users SET pontos = pontos + ? WHERE id = ?");
        $update_points->execute([$points_earned, $user_id]);
        $message[] = 'Pedido realizado com sucesso! Você ganhou ' . $points_earned . ' pontos.';

        // ...

    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/delivery.css">

</head>
<body>
   
<?php include 'delivery_header.php'; ?>

<section class="display-orders">
   <?php
      $cart_grand_total = 0;
      $select_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $select_cart_items->execute([$user_id]);
      // Verifica se há itens no carrinho
      if($select_cart_items->rowCount() > 0){
         // Loop através dos itens do carrinho
         while($fetch_cart_items = $select_cart_items->fetch(PDO::FETCH_ASSOC)){
            $cart_total_price = ($fetch_cart_items['price'] * $fetch_cart_items['quantity']);
            $cart_grand_total += $cart_total_price;
   ?>
  <!-- Comentando ou removendo o bloco HTML que exibe os itens do carrinho -->
  <!--
  <p> <?= $fetch_cart_items['name']; ?> <span>(<?= 'R$'.$fetch_cart_items['price'].',00/'. $fetch_cart_items['quantity']; ?>)</span> </p>
  -->
   <?php
      }
   } else {
      // Exibe a mensagem se o carrinho estiver vazio
      echo '<p class="Vazio">Seu carrinho está vazio</p>';
   }
   ?> 
   <div class="grand-total">Total geral :<span>R$<?= $cart_grand_total; ?>,00</span></div>
</section>


<section class="checkout-orders">

   <form action="" method="POST">

      <h3>Faça seu pedido</h3>

      <div class="flex">
         <div class="inputBox">
            <span>Nome :</span>
            <input type="text" name="name" placeholder="Digite seu nome :" class="box" required>
         </div>
         <div class="inputBox">
            <span>Número :</span>
            <input type="number" name="number" placeholder="Digite seu número :" class="box" required>
         </div>
         <div class="inputBox">
            <span>E-mail :</span>
            <input type="email" name="email" placeholder="Digite seu E-mail" class="box" required>
         </div>
         <div class="inputBox">
            <span>Método de pagamento</span>
            <select name="method" class="box" required>
               <option value="">Pagar na retirada</option>
               <option value="Cartão de crédito ou débito">Cartão de crédito ou débito</option>
               <option value="Pix">Pix</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Endereço Principal :</span>
            <input type="text" name="flat" placeholder="ex: Rua da imaginação,00,Vila dos faz de conta" class="box" required>
         </div>
        
         <div class="inputBox">
            <span>Cidade :</span>
            <input type="text" name="city" placeholder="ex: São Paulo" class="box" required>
         </div>
         <div class="inputBox">
            <span>Estado : :</span>
            <input type="text" name="state" placeholder="ex: SP" class="box" required>
         </div>
         <div class="inputBox">
            <span>País</span>
            <input type="text" name="country" placeholder="ex: Brasil" class="box" required>
         </div>
         <div class="inputBox">
           <span>Pontos a serem usados:</span>
           <input type="number" name="pontos_usados" placeholder="Insira a quantidade de pontos" class="box" min="0">
         </div>

         <div class="inputBox">
            <span>Selecione a ONG que você gostaria de doar uma marmita:</span>
            <select name="ong" class="box" required>
               <option value="Mundo Sem Fome">Mundo Sem Fome</option>
               <option value="credit card">Crianças Felizes</option>
               <option value="paytm">Amor e Cura</option>
            </select>
         </div>
      </div>

      <input type="submit" name="order" class="btn <?= ($cart_grand_total > 1)?'':'disabled'; ?>" value="Faça seu pedido">

   </form>

</section>








<?php include 'footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>