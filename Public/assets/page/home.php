<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title></title>
    <link rel="stylesheet" href="../css/style_home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="text-input">
          <textarea spellcheck="false" class="from-text" placeholder="Entrez votre texte ..."></textarea>
          <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation"></textarea>
        </div>
        <ul class="controls">
          <li class="row from">
            <div class="icons">
              <i id="from" class="fas fa-volume-up"></i>
              <i id="from" class="fas fa-copy"></i>
            </div>
            <select></select>
          </li>
          <li class="exchange"><i class="fas fa-exchange-alt"></i></li>
          <li class="row to">
            <select></select>
            <div class="icons">
              <i id="to" class="fas fa-volume-up"></i>
              <i id="to" class="fas fa-copy"></i>
            </div>
          </li>
        </ul>
      </div>
      <button>Traduire</button>
    </div>

    <script src="../js/countries.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>