<?php include_once('templates/header.php'); ?>

    <main id="main-content">
        <p>Bem-vindo ao sistema de registro financeiro da Rocha Developments</p>
        <h2>Registro</h2>
        <div class="container text-center">
            <form method="GET" action="">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Forma Pgto</th>
                            <th scope="col">Banco</th>
                            <th scope="col">Recorrente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros as $registro): ?>
                            <tr>
                                <td><?php echo $registro['id']; ?></td>
                                <td><?php echo $registro['data']; ?></td>
                                <td><?php echo $registro['valor']; ?></td>
                                <td><?php echo $registro['descricao']; ?></td>
                                <td><?php echo $registro['tipo']; ?></td>
                                <td><?php echo $registro['categoria']; ?></td>
                                <td><?php echo $registro['forma_pgto']; ?></td>
                                <td><?php echo $registro['banco']; ?></td>
                                <td><?php echo $registro['recorrencia']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>

    </main>

<?php include_once('templates/footer.php'); ?>