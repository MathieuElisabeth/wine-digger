<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vingt sur Vin - Votre cave sur mesure</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🍷</text></svg>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="assets/style/index.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>


  <?php include 'libraries/views/nav.html.php' ?>

  <div id="root"><?= $pageContent ?></div>

  <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" 
    integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/vue.js"></script>
</body>

</html>