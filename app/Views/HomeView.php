<!DOCTYPE html>
<html>
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
    </script>
</head>
<body style="margin: 0;">
<div class="header">
  <img class="center-block" style="width: 337px;" src="<?php echo base_url() ?>public/images/FacensPlay.JPG" onclick="redirectToHome()" />
  <input class="search-input center-block" style="cursor: pointer; background: url('<?php echo base_url() ?>public/images/search.svg') no-repeat right"/>
  <img class="center-block" width="30px" src="<?php echo base_url() ?>public/images/money.svg" onclick="redirectToPayment()">
  <img class="center-block" width="30px" src="<?php echo base_url() ?>public/images/profile.svg">
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
<div class="content">
  <div id="header"></div>
  <div class="container mt-5"><!--style="width: 1661px; height: 607px; left: 33px; top: 284px; position: absolute"-->
    <div class="row">
      <div class="col-md-4 mb-4 ">
        <div class="card-curso">
          <img style="width: 100%; height: 192px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/ethical-hackers-for-businesses-article.jpg" />
          <div class="card-dados">
            <div style="width: 49px; height: 51px;">
              <img id="watch1" onclick="markAsWatched(1)" style="width: 100%;" src="https://play-lh.googleusercontent.com/JMOMKbecJC3kvXpefBIbhBYezxy95ZjVxl7lBxWYpp2G-8xIlCUQFtOO5Jcb4gRMkg">
              <img id="watched1" class="none" style="width: 100%;" src="<?php echo base_url()?>/public/images/green-check.png">
            </div>
            <div style="width: 250px;">
              <div style="color: #2D9BF0; font-size: 20px; font-family: Roboto Mono; font-weight: 700; word-wrap: break-word">Ethical Hacking</div>
            </div>
            <div style="width: 34px; height: 34px;">
              <img style="width: 100%;" src="https://toppng.com/uploads/preview/icon-checklist-blue-check-list-blue-ico-11562997148qqjqygmtxm.png">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 ">
        <div class="card-curso">
          <img style="width: 100%; height: 192px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/ethical-hackers-for-businesses-article.jpg" />
          <div class="card-dados">
            <div style="width: 49px; height: 51px;">
              <img id="watch2" onclick="markAsWatched(2)" style="width: 100%;" src="https://play-lh.googleusercontent.com/JMOMKbecJC3kvXpefBIbhBYezxy95ZjVxl7lBxWYpp2G-8xIlCUQFtOO5Jcb4gRMkg">
              <img id="watched2" class="none" style="width: 100%;" src="<?php echo base_url()?>/public/images/green-check.png">
            </div>
            <div style="width: 250px;">
              <div style="color: #2D9BF0; font-size: 20px; font-family: Roboto Mono; font-weight: 700; word-wrap: break-word">Ethical Hacking</div>
            </div>
            <div style="width: 34px; height: 34px;">
              <img style="width: 100%;" src="https://toppng.com/uploads/preview/icon-checklist-blue-check-list-blue-ico-11562997148qqjqygmtxm.png">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 ">
        <div class="card-curso">
          <img style="width: 100%; height: 192px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/ethical-hackers-for-businesses-article.jpg" />
          <div class="card-dados">
            <div style="width: 49px; height: 51px;">
              <img id="watch3" onclick="markAsWatched(3)" style="width: 100%;" src="https://play-lh.googleusercontent.com/JMOMKbecJC3kvXpefBIbhBYezxy95ZjVxl7lBxWYpp2G-8xIlCUQFtOO5Jcb4gRMkg">
              <img id="watched3" class="none" style="width: 100%;" src="<?php echo base_url()?>/public/images/green-check.png">
            </div>
            <div style="width: 250px;">
              <div style="color: #2D9BF0; font-size: 20px; font-family: Roboto Mono; font-weight: 700; word-wrap: break-word">Ethical Hacking</div>
            </div>
            <div style="width: 34px; height: 34px;">
              <img style="width: 100%;" src="https://toppng.com/uploads/preview/icon-checklist-blue-check-list-blue-ico-11562997148qqjqygmtxm.png">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 ">
        <div class="card-curso">
          <img style="width: 100%; height: 192px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/ethical-hackers-for-businesses-article.jpg" />
          <div class="card-dados">
            <div style="width: 49px; height: 51px;">
              <img id="watch4" onclick="markAsWatched(4)" style="width: 100%;" src="https://play-lh.googleusercontent.com/JMOMKbecJC3kvXpefBIbhBYezxy95ZjVxl7lBxWYpp2G-8xIlCUQFtOO5Jcb4gRMkg">
              <img id="watched4" class="none" style="width: 100%;" src="<?php echo base_url()?>/public/images/green-check.png">
            </div>
            <div style="width: 250px;">
              <div style="color: #2D9BF0; font-size: 20px; font-family: Roboto Mono; font-weight: 700; word-wrap: break-word">Ethical Hacking</div>
            </div>
            <div style="width: 34px; height: 34px;">
              <img style="width: 100%;" src="https://toppng.com/uploads/preview/icon-checklist-blue-check-list-blue-ico-11562997148qqjqygmtxm.png">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 ">
        <div class="card-curso">
          <img style="width: 100%; height: 192px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/ethical-hackers-for-businesses-article.jpg" />
          <div class="card-dados">
            <div style="width: 49px; height: 51px;">
              <img id="watch5" onclick="markAsWatched(5)" style="width: 100%;" src="https://play-lh.googleusercontent.com/JMOMKbecJC3kvXpefBIbhBYezxy95ZjVxl7lBxWYpp2G-8xIlCUQFtOO5Jcb4gRMkg">
              <img id="watched5" class="none" style="width: 100%;" src="<?php echo base_url()?>/public/images/green-check.png">
            </div>
            <div style="width: 250px;">
              <div style="color: #2D9BF0; font-size: 20px; font-family: Roboto Mono; font-weight: 700; word-wrap: break-word">Ethical Hacking</div>
            </div>
            <div style="width: 34px; height: 34px;">
              <img style="width: 100%;" src="https://toppng.com/uploads/preview/icon-checklist-blue-check-list-blue-ico-11562997148qqjqygmtxm.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>