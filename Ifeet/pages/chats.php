<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
  // Se não estiver logado, redirecionar para a página de login
  header('Location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <!-- Definindo orientação de tela para iOS -->
  <meta name="apple-mobile-web-app-orientation" content="portrait">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- font awesome  -->
  <script src="https://kit.fontawesome.com/dc951fd168.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <script src="../assets/js/svg-inject.min.js"></script>

  <title>IFeet</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex bg-light m-0">
  <div
    class="d-flex flex-column align-items-center justify-content-between m-auto my-0 px-2 div-container position-relative">

    <header class="w-100 d-flex justify-content-center align-items-center pt-4 px-4">
      <img class="logo" src="../assets/images/logo.png" alt="Logo do IFeet">
    </header>

    <main class="w-100 d-flex align-content-center justify-content-center overflow-x-auto h-100">
      <section class="container d-flex flex-column align-items-center justify-content-start mt-3">
        <!-- Lista de Conversas -->
        <ul class="list-group w-100">
          <!-- Conversa 1 -->
          <li class="conversation-item list-group-item list-group-item-action d-flex justify-content-between align-items-center w-100">
            <div class="d-flex align-items-center">
              <div>
                <img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt="" class="rounded-circle me-3">
              </div>
              <div class="conversation-item-wrapper">
                <h5 class="mb-1">Nike Air - Usuário</h5>
                <div class="conversation-text mb-0 text-muted">Última mensagem ou descrição curta</div>
              </div>
            </div>
            <span class="badge bg-primary rounded-pill">3</span>
          </li>

          <li class="conversation-item list-group-item list-group-item-action d-flex justify-content-between align-items-center w-100">
            <div class="d-flex align-items-center">
              <div>
                <img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt="" class="rounded-circle me-3">
              </div>
              <div class="conversation-item-wrapper">
                <h5 class="mb-1">Nike Air - Usuário</h5>
                <div class="conversation-text mb-0 text-muted">Última mensagem ou descrição curta</div>
              </div>
            </div>
            <span class="badge bg-primary rounded-pill">3</span>
          </li>

          <li class="conversation-item list-group-item list-group-item-action d-flex justify-content-between align-items-center w-100">
            <div class="d-flex align-items-center">
              <div>
                <img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt="" class="rounded-circle me-3">
              </div>
              <div class="conversation-item-wrapper">
                <h5 class="mb-1">Nike Air - Usuário</h5>
                <div class="conversation-text mb-0 text-muted">Última mensagem ou descrição curta</div>
              </div>
            </div>
            <span class="badge bg-primary rounded-pill">3</span>
          </li>
        </ul>
      </section>
    </main>


    <footer class="w-100 d-flex align-items-center justify-content-around gap-3 p-2">
      <a href="home.php"><img src="../assets/images/shoe.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="chats.php"><img src="../assets/images/chat.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="configShoes.php"><img src="../assets/images/user.svg" onload="SVGInject(this)" alt="" /></a>
    </footer>
  </div>


  <script src="../assets/js/drag.js"></script>

</body>

</html>