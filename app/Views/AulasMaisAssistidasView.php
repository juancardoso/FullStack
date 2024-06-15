<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Quantidade de Visualizações</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="<?php echo base_url('public/css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="<?php echo base_url('public/js/aula.js'); ?>"></script>
    <style>
        .content {
            padding: 20px;
        }
        .title-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container mt-5">
        <div class="title-container">
            <h1>Quantidade de Visualizações das Aulas</h1>
        </div>
        <div class="table-responsive">
            <table id="table" class="table table-sm table-hover table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID da Aula</th>
                        <th>Descrição</th>
                        <th>Quantidade de Visualizações</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php if (!empty($aulas)): ?>
                        <?php foreach ($aulas as $aula): ?>
                            <tr>
                                <td><?php echo $aula->idAula; ?></td>
                                <td><?php echo $aula->descricao; ?></td>
                                <td><?php echo $aula->visualizacoes; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center">Nenhuma aula encontrada</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
