<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Nome</th>      
        <th>Data de Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td>
            <a href="/funcionario/delete?id=<?= $item['id'] ?>">X</a>
        </td>
        <td><?= $item['id'] ?></td>
        <td><a href="/funcionario/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a></td>        
        <td><?= $item['data_nasc'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['telefone'] ?></td>      
       

    </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5"> Nenhum registro de funcionário encontrado.</td>

        </tr>
        <?php endif ?>


</table>

    </body>
    </html>

</table>