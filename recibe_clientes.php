<?php
    $codigo = $_POST['codigo'];
    $Nombres= $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Dui = $_POST['Dui'];
    $Direccion = $_POST['Direccion'];
    $Telefono= $_POST['Telefono'];
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Dui</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $Codigo?></td>
                <td><?php echo $Nombres?></td>
                <td><?php echo $Apellidos ?></td>
                <td><?php echo $Dui?></td>
                <td><?php echo $Direccion?></td>
                <td><?php echo $Telefono?></td>
            </tr>
        </tbody>
    </table>
</div>
