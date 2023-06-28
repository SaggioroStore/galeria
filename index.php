<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap">
    <title>Galeria de Imagens</title>
    <h1><span class="green-text">Galeria</span> <span class="purple-text">GIFs</span></h1>
</head>
<body>
  <h2 class="category">Casa e Cozinha</h2>
  <div class="gallery">
    <div>
      <div class="caption">1</div>
      <img src="/uploads/1.gif">
    </div>
    <div>
      <div class="caption">2</div>
      <img src="/uploads/2.gif">
    </div>
    <div>
      <div class="caption">3</div>
      <img src="/uploads/3.gif">
    </div>
    <div>
      <div class="caption">4</div>
      <img src="/uploads/4.gif">
    </div>
  </div>
  <h2 class="category">Saúde e Beleza</h2>
  <div class="gallery">
    <div>
        <div class="caption">5</div>
        <img src="/uploads/5.gif">
    </div>
    <div>
        <div class="caption">6</div>
        <img src="/uploads/6.gif">
    </div>
    <div>
        <div class="caption">7</div>
        <img src="/uploads/7.gif">
    </div>
    <div>
        <div class="caption">8</div>
        <img src="/uploads/8.gif">
    </div>
  </div>
  <h2 class="category">Infantil</h2>
  <div class="gallery">
    <div>
        <div class="caption">9</div>
        <img src="/uploads/9.gif">
    </div>
    <div>
        <div class="caption">10</div>
        <img src="/uploads/10.gif">
    </div>
    <div>
        <div class="caption">11</div>
        <img src="/uploads/11.gif">
    </div>
    <div>
        <div class="caption">12</div>
        <img src="/uploads/12.gif">
    </div>
  </div>
  <h2 class="category">Pets</h2>
  <div class="gallery">
    <div>
        <div class="caption">13</div>
        <img src="/uploads/13.gif">
    </div>
    <div>
        <div class="caption">14</div>
        <img src="/uploads/14.gif">
    </div>
    <div>
        <div class="caption">15</div>
        <img src="/uploads/15.gif">
    </div>
    <div>
        <div class="caption">16</div>
        <img src="/uploads/16.gif">
    </div>
  </div>
  <h2 class="category">Outros</h2>
  <div class="gallery">
    <div>
      <div class="caption">17</div>
      <img src="">
    </div>
    <div>
      <div class="caption">18</div>
      <img src="">
    </div>
    <div>
      <div class="caption">19</div>
      <img src="">
    </div>
    <div>
      <div class="caption">20</div>
      <img src="">
    </div>
  </div>
</body>
</html>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #2d2d2d;
    }

    h1 {
        text-align: left;
        background-color: #1d1d1d;
        margin: -8px;
        padding: 10px;
        top: 0;
        left: 0;
    }

    .green-text {
    color: #19c161;
    }

    .purple-text {
    color: #2e3192;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
        margin: 20px;
    }

    .gallery div {
        border: 1px solid #19c161;
        padding: 15px;
        border-radius: 10px;
    }

    .gallery div.caption {
        border: none;
    }

    .gallery img {
        width: 100%;
        height: auto;
    }

    .gallery .caption {
        text-align: center;
        color: #19c161;

    }

    .category {
        text-align: center;
        color: #19c161;
        margin-top: 20px;
    }
    
    /* Estilizando a barra de rolagem */
    ::-webkit-scrollbar {
    width: 6px;
    }
    
    /* Estilizando o track da barra de rolagem */
    ::-webkit-scrollbar-track {
    background: #fff;
    }
    
    /* Estilizando o thumb (a bolinha que representa a posição atual) da barra de rolagem */
    ::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 0px;
    }
    
    /* Estilizando o thumb quando estiver sendo arrastado */
    ::-webkit-scrollbar-thumb:hover {
    background: #555;
    }
</style>
