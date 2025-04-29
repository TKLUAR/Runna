<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="icon"
      type="image/png"
      href="../imagens-videos/Icone-logo/android-chrome-512x512.png"
    />
    <title>Runna | Login</title>
    <link rel="stylesheet" href="../css/produtos.css" />
</head>
<body>
<header class="navbar">
      <nav class="logo"><a href="sobre.html">Runna</a></nav>

      <!-- MENU-RESPONSIVO -->
      <button class="hamburger" id="hamburger">&#9776;</button>
      <!-- MENU-RESPONSIVO -->

      <nav class="nav-links">
        <a href="../index.html">Início</a>
        <a href="masculino.html">Masculino</a>
        <a href="feminino.html">Feminino</a>
        <a href="equipamentos.html">Equipamentos</a>
        <a href="contato.html">Contato</a>

        <!-- MENU-RESPONSIVO -->
        <div class="mobile-actions">
          <a href="login.php">Login</a>
          <a href="#" class="cart-icon">🛒</a>
        </div>
      </nav>
      <div class="actions">
        <a href="login.php">Login</a>
        <a href="#" class="cart-icon">🛒</a>
      </div>
    </header>

    <form action="validador.php" method="post">
        <label for="">usuario</label>
        <input type="text" name="user" id="user">
        <label for="">senha</label>
        <input type="password" name="pass" id="pass">
<input type="submit" value="login" id="bnt" name="submit">
    </form>
    
</body>
</html>