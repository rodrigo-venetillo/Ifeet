<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Se não estiver logado, redirecionar para a página de login
    header('Location: login.php');
    exit(); // Encerra o script após o redirecionamento para evitar a execução de código adicional
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

  <style>
    /* Estilo para o círculo de foto de perfil */
    .profile-container {
      text-align: center;
      margin-top: 20px; /* Espaçamento acima do círculo */
    }

    .profile-picture {
      display: inline-block;
      width: 120px; /* Aumentado o tamanho do círculo */
      height: 120px; /* Aumentado o tamanho do círculo */
      border-radius: 50%; /* Tornar a imagem circular */
      overflow: hidden; /* Ocultar qualquer parte da imagem fora do círculo */
      border: 3px solid #fff; /* Borda branca ao redor do círculo */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra ao redor do círculo */
      background: #f0f0f0; /* Cor de fundo caso a imagem não carregue */
    }

    .profile-picture img {
      width: 100%; /* Ajusta a imagem para preencher o círculo */
      height: 100%; /* Ajusta a imagem para preencher o círculo */
      object-fit: cover; /* Mantém a proporção da imagem enquanto preenche o círculo */
    }

    .profile-name {
      margin-top: 10px; /* Espaçamento entre o círculo e o nome */
      font-size: 1.2rem;
      font-weight: 500;
      color: #333; /* Cor do texto do nome */
    }

    /* Estilo para o botão de adicionar */
    #button-plus {
      cursor: pointer; /* Altera o cursor para indicar que o botão é clicável */
    }
  </style>
</head>

<body class="d-flex bg-light m-0">
  <div class="d-flex flex-column align-items-center justify-content-between m-auto my-0 px-2 div-container position-relative">

    <header class="w-100 d-flex justify-content-center align-items-center pt-4 px-4">
      <img class="logo" src="../assets/images/logo.png" alt="Logo do IFeet">
    </header>

    <!-- Adicionando o espaço circular para a foto de perfil e nome -->
    <div class="profile-container">
      <div class="profile-picture">
        <img src="https://via.placeholder.com/120" alt="Foto de Perfil">
      </div>
      <div class="profile-name">NOME</div>
    </div>

    <main class="w-100 d-flex align-content-center justify-content-center overflow-x-auto h-100">
      <section class="container d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col-4">
            <div class="item">
              <div><img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt=""></div>
              <p>Nike Air</p>
            </div>
          </div>
          <div class="col-4">
            <div class="item">
              <div><img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt=""></div>
              <p>Nike Air</p>
            </div>
          </div>
          <div class="col-4">
            <div class="item">
              <div><img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt=""></div>
              <p>Nike Air</p>
            </div>
          </div>
          <div class="col-4">
            <div class="item">
              <div><img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt=""></div>
              <p>Nike Air</p>
            </div>
          </div>
          <div class="col-4">
            <div class="item">
              <div><img src="https://acdn.mitiendanube.com/stores/001/326/998/products/whatsapp-image-2023-11-24-at-08-55-42-a9258a74b5ddd854f617021274585169-1024-1024.webp" alt=""></div>
              <p>Nike Air</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <section id="button-plus" class="w-100 h-auto my-2 d-flex align-items-start justify-content-around sticky-bottom">
      <button class="d-flex align-items-center justify-content-center" onclick="window.location.href='registerTennis.html'">
        <i class="fa-solid fa-plus d-flex align-items-center justify-content-center"></i>
      </button>
    </section>

    <footer class="w-100 d-flex align-items-center justify-content-around gap-3 p-2">
      <a href="home.html"><img src="../assets/images/shoe.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="chats.html"><img src="../assets/images/chat.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="configShoes.html"><img src="../assets/images/user.svg" onload="SVGInject(this)" alt="" /></a>
    </footer>
  </div>

  <script src="../assets/js/drag.js"></script>

</body>

</html>
