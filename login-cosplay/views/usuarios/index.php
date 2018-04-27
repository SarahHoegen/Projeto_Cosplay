

<h1>Usuarios</h1>
<a href="usuarios.php?acao=inserir">Inserir Usuario</a>



<table>
    <tr>
        <th>0</th>
        <th>Nome do Usuario</th>
    </tr>


    <?php foreach ($usuarios as $usuario): ?>
        <tr>

            <td> <?= $usuario->getId();           ?>  </td>
            <td> <a href="?acao=exibir&id=<?= $usuario->getId(); ?>"><?= $usuario>getNome();        ?></a> </td>
            <td> <?= $usuario->getEmail();   ?>  </td>
            <td> <?= $usuario->getCelular();   ?>  </td>
            <td> <?= $usuario->getApelido();   ?>  </td>
            <td> <?= $usuario->getData();   ?>  </td>

        </tr>
    <?php endforeach; ?>
</table>

