<body class="body-login">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/styles.css">
  <form class="form-login" action="login" method="post">
      <div>
          <img width="100%" src="<?php echo base_url() ?>public/images/FacensPlay.JPG">
      </div>
      <h3>Login</h3>

      <label for="username">Username</label>
      <input name="email" class="input-login" type="text" placeholder="Email or Phone" id="username">

      <label for="password">Password</label>
      <input name="password" class="input-login" type="password" placeholder="Password" id="password">

      <button>Entrar</button>
      <button type="button" id="cadastroButton">Cadastrar</button>
  </form>

</body>
</html>


<script>
    document.getElementById("cadastroButton").onclick = function () {
        location.href = "<?php echo base_url() ?>Cadastro";
    };
</script>