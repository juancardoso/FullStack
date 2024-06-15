<html>
<?php include 'header.php' ?>

<div class="container mt-5">
    <h2>Formulário de Suporte</h2>
    <form action="processa_suporte.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="comentarios">Comentários do Ticket</label>
            <textarea class="form-control" id="comentarios" name="comentarios" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</html>