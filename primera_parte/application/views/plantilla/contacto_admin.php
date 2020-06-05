<div class="container fondo-individual text-light">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align:center;">Listado de Mensajes</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table id="mytable" class="table table-responsive-md table-bordred table-striped table-hover">
                <thead>
                <th>Nº CONSULTA</th>
                <th>APELLIDO</th>
                <th>NOMBRE</th>
                <th>FECHA</th>
                <th>VER</th>
                <th>ESTADO</th>
                </thead>
                <tbody>
                <?php foreach($consultas as $row) { ?>
                <tr class= "fondo-item">
                <td> <?php echo $row->id_mensaje; ?> </td>
                <td> <?php echo $row->nombre_emisor; ?> </td>
                <td> <?php echo $row->apellido_emisor; ?> </td>
                <td> <?php echo $row->fecha_consulta; ?> </td>

                <td> <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $row->id_mensaje; ?>" aria-expanded="false" aria-controls="collapseExample">
                        Mensaje
                    </button>
                    </p>
                    <div class="collapse" id="<?php echo $row->id_mensaje; ?>">
                        <div class="card card-body bg-dark">
                            <?php echo $row->consulta; ?>
                        </div>
                    </div>
                </td>
                <?php
                            if ( ($row->estado) == 1 )
                            { ?>
                            <td>
                            <i class="icon-eye"></i></td>
                            <?php } else {
                            ?>
                            <td> <a class="btn btn-danger" href="<?php echo
                            base_url("consultas_controller/mensaje_leido/$row->id_mensaje");?>" >
                            <i class="icon-eye-blocked"></i></a></td>>
                            <?php } ?>
                <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>