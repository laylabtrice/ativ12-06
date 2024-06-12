<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tela de cadastro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus { color: #333;
    text-shadow: none;
    }

    body {
    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    font-size: 1.13rem;
    }
    .cover-container {
      max-width: 70em;
    }

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
      font-size: 1.8em;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link + .nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }
    p{
      font-size: 1.4rem;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f9f9f9;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 11px;
      font-weight: bold;
      color: #333;
    }
    
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    
    button.btn-primary {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
      font-size: 1.4rem;
    }
    
    button.btn-primary:hover {
      background-color: #0056b3;
    }

    main.px-3 {
      padding: 15px;
      text-align: center;
    }
    
    h1 {
      margin-bottom: 20px;
    }
  
    </style>

    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Entre ou cadastre-se</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="cadastro.php">Cadastro</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
        <h1>Cadastre-se</h1>
        <form action="cadastro.php" method="post">
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
        </form>
      </main>

  <footer class="mt-auto text-white-50">
    <p>Estilizado com <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, modificado por <a href="https://github.com/laylabtrice" class="text-white">@laylabtrice</a>.</p>
  </footer>
</div>
   
  </body>
</html>
