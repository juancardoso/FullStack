<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="<?php echo base_url() ?>public/js/aula.js"></script>
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="content">
      <div id="header"></div>
        <table id="table" class="table table-light">
          <tr scope="col">
            <th>ID da Aula</th>
            <th>Quantidade de visualizações</th>
          </tr>
        </table>
    </div>
</body>
</html>