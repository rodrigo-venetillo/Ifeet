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

<!-- Codigo acima deve ser posto em todas paginas que precise de protecao para sessao iniciada (o problema da url direta)-->



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
    class=" d-flex flex-column align-items-center justify-content-between m-auto my-0 px-2 div-container gap-4 position-relative">

    <header class="w-100 d-flex justify-content-center align-items-center pt-4 px-4">
      <img class="logo" src="../assets/images/logo.png" alt="Logo do IFeet">
    </header>

    <main id="cards-container" class="d-flex w-100 h-100 position-relative">
      <section class="d-flex align-content-center justify-content-center w-100">
        <div class="card card-current z-3 w-100 h-100 position-absolute rounded-2">
          <div class="card-actions z-1 w-100 h-100 d-flex align-items-center justify-content-center position-absolute">
            <div class="prev-img w-50 h-100"></div>
            <div class="next-img w-50 h-100"></div>
          </div>
          <div class="card-img-container position-relative">
            <div
              class="bullets z-1 d-flex align-content-center justify-content-center w-100 gap-3 position-absolute p-2">
            </div>
            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp"
              class="card-img-top img-active" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-1-4bf6d2f92c1cca831717021274610464-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-52-40-89e270021f5cfb341817021274651771-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-2-98f0fe9632c25962fd17021274597848-1024-1024.webp"
              class="card-img-top" draggable="false">

          </div>
          <div
            class="card-body position-absolute bottom-0 z-1 d-flex align-self-center justify-content-end flex-column rounded-2">
            <div class="title-container d-flex align-items-end justify-content-start w-100 gap-3">
              <h2 class="card-title m-0">Nike Air, </h2>
              <h3 class="card-size m-0">39</h3>
            </div>
            <h5 class="card-condition">Seminovo</h5>
            <p class="card-text">Tênis comprado a duas semanas. Motivo da troca: não uso mais.</p>
          </div>
        </div>

        <div class="card card-next z-2 w-100 h-100 position-absolute rounded-2">
          <div class="card-actions z-1 w-100 h-100 d-flex align-items-center justify-content-center position-absolute">
            <div class="prev-img w-50 h-100"></div>
            <div class="next-img w-50 h-100"></div>
          </div>
          <div class="card-img-container position-relative">
            <div
              class="bullets z-1 d-flex align-content-center justify-content-center w-100 gap-3 position-absolute p-2">
            </div>
            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp"
              class="card-img-top img-active" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-1-4bf6d2f92c1cca831717021274610464-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-52-40-89e270021f5cfb341817021274651771-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-2-98f0fe9632c25962fd17021274597848-1024-1024.webp"
              class="card-img-top" draggable="false">

          </div>
          <div
            class="card-body position-absolute bottom-0 z-1 d-flex align-self-center justify-content-end flex-column rounded-2">
            <div class="title-container d-flex align-items-end justify-content-start w-100 gap-3">
              <h2 class="card-title m-0">Nike Air, </h2>
              <h3 class="card-size m-0">39</h3>
            </div>
            <h5 class="card-condition">Seminovo</h5>
            <p class="card-text">Tênis comprado a duas semanas. Motivo da troca: não uso mais.</p>
          </div>
        </div>

        <div class="card card-next z-1 w-100 h-100 position-absolute rounded-2">
          <div class="card-actions z-1 w-100 h-100 d-flex align-items-center justify-content-center position-absolute">
            <div class="prev-img w-50 h-100"></div>
            <div class="next-img w-50 h-100"></div>
          </div>
          <div class="card-img-container position-relative">
            <div
              class="bullets z-1 d-flex align-content-center justify-content-center w-100 gap-3 position-absolute p-2">
            </div>
            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp"
              class="card-img-top img-active" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-1-4bf6d2f92c1cca831717021274610464-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-52-40-89e270021f5cfb341817021274651771-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-2-98f0fe9632c25962fd17021274597848-1024-1024.webp"
              class="card-img-top" draggable="false">

          </div>
          <div
            class="card-body position-absolute bottom-0 z-1 d-flex align-self-center justify-content-end flex-column rounded-2">
            <div class="title-container d-flex align-items-end justify-content-start w-100 gap-3">
              <h2 class="card-title m-0">Nike Air, </h2>
              <h3 class="card-size m-0">39</h3>
            </div>
            <h5 class="card-condition">Seminovo</h5>
            <p class="card-text">Tênis comprado a duas semanas. Motivo da troca: não uso mais.</p>
          </div>
        </div>

        <div class="card card-next z-0 w-100 h-100 position-absolute rounded-2">
          <div class="card-actions z-1 w-100 h-100 d-flex align-items-center justify-content-center position-absolute">
            <div class="prev-img w-50 h-100"></div>
            <div class="next-img w-50 h-100"></div>
          </div>
          <div class="card-img-container position-relative">
            <div
              class="bullets z-1 d-flex align-content-center justify-content-center w-100 gap-3 position-absolute p-2">
            </div>
            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp"
              class="card-img-top img-active" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-1-4bf6d2f92c1cca831717021274610464-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-52-40-89e270021f5cfb341817021274651771-1024-1024.webp"
              class="card-img-top" draggable="false">

            <img
              src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-2-98f0fe9632c25962fd17021274597848-1024-1024.webp"
              class="card-img-top" draggable="false">

          </div>
          <div
            class="card-body position-absolute bottom-0 z-1 d-flex align-self-center justify-content-end flex-column rounded-2">
            <div class="title-container d-flex align-items-end justify-content-start w-100 gap-3">
              <h2 class="card-title m-0">Nike Air, </h2>
              <h3 class="card-size m-0">39</h3>
            </div>
            <h5 class="card-condition">Seminovo</h5>
            <p class="card-text">Tênis comprado a duas semanas. Motivo da troca: não uso mais.</p>
          </div>
        </div>
      </section>
    </main>

    <section id="buttons-actions"
      class="w-100 h-auto my-2 d-flex align-items-start justify-content-around sticky-bottom z-1">
      <button id="button-dislike" class="d-flex align-items-center justify-content-center">
        <i class="fa-solid fa-xmark d-flex align-items-center justify-content-center"></i>
      </button>
      <button id="button-superlike" class="d-flex align-items-center justify-content-center">
        <i class="fa-solid fa-star d-flex align-items-center justify-content-center"></i>
      </button>
      <button id="button-like" onclick="showMatch()" class="d-flex align-items-center justify-content-center">
        <i class="fa-solid fa-thumbs-up d-flex align-items-center justify-content-center"></i>
      </button>
    </section>

    <footer class="w-100 d-flex align-items-center justify-content-around gap-3 p-2">
      <a href="home.php"><img src="../assets/images/shoe.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="chats.php"><img src="../assets/images/chat.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="configShoes.php"><img src="../assets/images/user.svg" onload="SVGInject(this)" alt="" /></a>
    </footer>

    <div class="overlay-match position-absolute top-0 left-0 w-100 h-100 z-3">
      <div class="w-100 d-flex align-items-center justify-content-end p-2">
        <button onclick="closeMatch()" class="button-close px-2 rounded-5"><i class="fa-solid fa-x"></i></button>
      </div>
      <div class="description-match d-flex flex-column align-items-center justify-content-center w-100 p-2 gap-4">
        <div class="text-center">
          <h2>Match</h2>
          <h5>Rodrigo também curtiu seu tênis!</h5>
        </div>
        <img class="w-100"
          src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp"
          alt="">

        <form class="form-match w-100 d-flex align-content-center justify-content-center gap-2">
          <input type="text" class="w-100 p-2 rounded-1" name="" id="" placeholder="Envie uma mensagem" />
          <button class="p-2 rounded-1" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>


  <script src="../assets/js/drag.js"></script>
  <script src="../assets/js/scripts.js"></script>

</body>

</html>