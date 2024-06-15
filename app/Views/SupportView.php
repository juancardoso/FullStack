<html>
<?php include 'header.php' ?>

<div class="container mt-5">
    <h2>Formulário de Suporte</h2>
    <form action="Support/Cadastrar" method="POST">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="comentarios">Comentários do Ticket</label>
            <textarea class="form-control" id="comentarios" name="descricao" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<div class="container mt-5">
    <h2>Meus Tickets</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Titulo</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td><?php echo $ticket->titulo; ?></td>
                        <td><?php echo $ticket->descricao; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
</html>