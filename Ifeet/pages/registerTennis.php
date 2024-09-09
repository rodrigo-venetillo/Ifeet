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
  <meta name="apple-mobile-web-app-orientation" content="portrait">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dc951fd168.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <title>Cadastro de Calçados</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    .form-container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
    }
    .form-group img {
      max-width: 100%;
      height: auto;
    }
    .form-actions {
      text-align: center; /* Centraliza o conteúdo dentro do contêiner */
    }
  </style>
</head>

<body class="d-flex bg-light m-0">
  <div class="d-flex flex-column align-items-center justify-content-between m-auto my-0 px-2 div-container position-relative">
    
    <header class="w-100 d-flex justify-content-center align-items-center pt-4 px-4">
      <img class="logo" src="../assets/images/logo.png" alt="Logo do IFeet">
    </header>

    <main class="w-100 d-flex align-items-center justify-content-center overflow-x-auto h-100">
      <div class="form-container">
        <h2 class="mb-4">Cadastrar Calçado</h2>
        <form action="../assets/php/newTennis.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="tamanho" class="form-label">Tamanho</label>
            <input type="text" class="form-control" id="tamanho" name="tamanho" required>
          </div>
          <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" class="form-control" id="cor" name="cor" required>
          </div>
          <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
          </div>
          <div class="mb-3">
            <label for="condicao" class="form-label">Condição</label>
            <select class="form-select" id="condicao" name="condicao" required>
              <option value="" disabled selected>Escolha uma opção</option>
              <option value="novo">Novo</option>
              <option value="usado">Usado</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Foto do Calçado</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
            <img id="fotoPreview" src="#" alt="Pré-visualização da Foto" style="display: none; margin-top: 10px;">
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary p-2">Cadastrar</button>
          </div>
        </form>
      </div>
    </main>

    <footer class="w-100 d-flex align-items-center justify-content-around gap-3 p-2">
      <a href="home.php"><img src="../assets/images/shoe.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="chats.php"><img src="../assets/images/chat.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="configShoes.php"><img src="../assets/images/user.svg" onload="SVGInject(this)" alt="" /></a>
    </footer>
  </div>

  <script>
    document.getElementById('foto').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.getElementById('fotoPreview');
          img.src = e.target.result;
          img.style.display = 'block';
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>

