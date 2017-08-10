<?php
    include_once("UsuarioCollector.php");
    $usuarioCollectorObj = new UsuarioCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</head>
<body>
    <h1>USUARIOS</h1>

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>USUARIO</th>
                <th>PASSWORD</th>
                <th>ROL</th>
                <th>OPERACION</th>
                <th>OPERACION</th>
            </tr>
        </thead>
        <?php
            foreach ($usuarioCollectorObj->showUsuarios() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_usuario() . "</td>";         
            echo "<td>" . $c->get_usuario() . "</td>";   
            echo "<td>" . $c->get_password() . "</td>"; 
            echo "<td>" . $c->get_rol() . "</td>";    
            echo "<td><a href='#'><button>EDITAR</button></a></td>";
            echo "<td><a href='#'><button>ELIMINAR</button></a></td>";    
            echo "</tr>"; 
            }
        ?>
    </table>
    <button class="btn">SALIR</button>
    <button class="btn">NUEVO USUARIO</button>
</body>
</html>