<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/styles.css"">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>public/js/home.js"></script>
    <script>
      function redirectToHome(){
        window.location.href="<?php echo base_url()?>Home"
      }  

      function redirectToPayment(){
        window.location.href="<?php echo base_url()?>Pagamento"
      }  
      
      function redirectToLogout() {
        window.location.href="<?php echo base_url()?>Logout"
      }
    </script>
</head>
<body style="margin: 0;">
<div class="header">
  <img class="center-block" style="width: 337px; cursor: pointer;" src="<?php echo base_url() ?>public/images/FacensPlay.JPG" onclick="redirectToHome()" />
  <input class="search-input center-block" style="cursor: pointer; background: url('<?php echo base_url() ?>public/images/search.svg') no-repeat right"/>
  <img class="center-block" width="30px" style="cursor: pointer;" src="<?php echo base_url() ?>public/images/money.svg" onclick="redirectToPayment()">
  <img class="center-block" width="30px" src="<?php echo base_url() ?>public/images/profile.svg">
  <img class="center-block" width="30px" style="cursor: pointer;" src="<?php echo base_url() ?>public/images/logout.svg" onclick="redirectToLogout()">
  </div>
</div>
  
<div class="menu">
  <div class="menu-item">
    Desenvolvimento
  </div>
  <div class="menu-item">
    Finanças
  </div>
  <div class="menu-item">
    Design
  </div>
  <div class="menu-item">
    Marketing
  </div>
  <div class="menu-item">
    Produtividade
  </div>
  <div class="menu-item">
    Negocios
  </div>
</div>