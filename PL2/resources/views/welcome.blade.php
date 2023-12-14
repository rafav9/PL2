<!DOCTYPE html>
<html>
  <head>
    <style>
    body {font-size: 28px;
    }
    
    .header {
      position: relative;
      width: 100%;
      height: 100vh; /* 100% da altura da tela */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .header img {
      max-width: 100%;
      max-height: 100%;
      width: auto;
      height: auto;
      position: absolute;
      top: 0;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      position: -webkit-sticky; /* Safari */
      position: sticky;
      top: 0;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }

    .active {
      background-color: #4CAF50;
    }
/* Estilos para a imagem */
    .image-container {
      position: relative;
    }

    .image-container img {
      position: absolute;
      top: 0;
      right: 0;
      width: 100px; /* Ajuste o tamanho da imagem conforme necessário */
      height: auto;
    }
  </style>
  </head>
  <header></header>
  <body>
    <div class="header">
      <img src="gestaodeeventos.jpg"  alt="imagem com caminho errado">
    </div>

    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#criatividade">Criatividade</a></li>
    </ul>



  </body>
</html>