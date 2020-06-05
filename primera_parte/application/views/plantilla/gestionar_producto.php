<div class="container fondo-individual text-light">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align:center;">Listado de Productos</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table id="mytable" class="table table-bordred table-striped table-hover">
                <thead>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Consola</th>
                    <th>Tipo</th>
                    <th>Stock</th>
                    <th>Editar</th>
                    <th>Activar/Eliminar</th>
                </thead>

                <tbody>
                    <?php foreach($producto as $row) { ?>
                        <tr class= "fondo-item">
                            <td> <?php echo $row->titulo; ?> </td>
                            <td> <?php echo $row->descripcion; ?> </td>
                            <td> <?php echo $row->precio; ?> </td>
                            <td> <?php echo $row->nombre_consola; ?> </td>
                            <td> <?php echo $row->nombre; ?> </td>
                            <td> <?php echo $row->stock; ?> </td>
                            <td> <a class="btn btn-success" href="<?php echo
                            base_url("editar/$row->id_producto");?>" > <i class="icon-pencil"></i> </a></td>
                            <?php
                            if ( ($row->estado) == 1 )
                            { ?>
                            <td> <a class="btn btn-danger" href="<?php echo
                            base_url("eliminar/$row->id_producto");?>" >
                            <i class="icon-bin"></i></a></td>
                            <?php } else {
                            ?>
                            <td> <a class="btn btn-success" href="<?php echo
                            base_url("activar/$row->id_producto");?>" ><i class="icon-checkmark3"></i></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
                
            </table>
            
        </div>

    </div>

</div>