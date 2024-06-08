<html>
  <body class="body-cadastro">
      <link rel="stylesheet" href="<?php echo base_url() ?>public/css/styles.css">
      <form class="form-cadastro" action="Cadastro/Cadastrar" method="post">

          <div>
            <img width="100%" src="<?php echo base_url() ?>public/images/FacensPlay.JPG">
          </div>
          <h3>Cadastro de usuário</h3>

          <label for="nome">Nome</label>
          <input class="input-cadastro" type="text" placeholder="Nome" id="nome" name="nome">

          <label for="email">Email</label>
          <input class="input-cadastro" type="email" placeholder="Email" id="email" name="email">

          <label for="senha">Senha</label>
          <input class="input-cadastro" type="password" placeholder="Senha" id="senha" name="senha">
          
        <button>Cadastrar</button>
    </form>
    </body>
</html>