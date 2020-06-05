<div class="container fondo-individual text-light">
<!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align:center;">Listado de Pedidos</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo form_open('pedido_controller/filtrar_por_fecha'); ?>
                <!-- Campo de entrada de fecha -->
                Fecha Inicial:
                <input type="date" name="fechaIni" min="2018-03-25"
                max="2025-05-25" step="2">

                Fecha Final:
                <input type="date" name="fechaFin" min="2018-03-25"
                max="2025-05-25" step="2">

                <button type="submit" class="btn btn-primary">FILTRAR</button>
        </div>
    </div>

<!-- /.row -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table id="mytable" class="table table-responsive-md table-bordred table-striped table-hover">
                <thead>
                <th>Nº ORDEN</th>
                <th>APELLIDO</th>
                <th>NOMBRE</th>
                <th>FECHA</th>
                <th>TOTAL</th>
                <th>VER</th>
                </thead>
                <tbody>
                <?php foreach($pedidos as $row) { ?>
                <tr class= "fondo-item">
                <td> <?php echo $row->id_orden; ?> </td>
                <td> <?php echo $row->apellido; ?> </td>
                <td> <?php echo $row->nombre; ?> </td>
                <td> <?php echo $row->Fecha; ?> </td>
                <td> $<?php echo $row->Total; ?></td>

                <td> <a class="btn btn-success" target='_blank' href="<?php echo
                base_url("ver_pedido/$row->id_orden");?>" > 
                <i class ="icon-search3" ></i>
                 </a></td>
                <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>

                    <nav class="mt-4">
            
            <?php echo $this->pagination->create_links() ?>
            
            
            </nav>

</div>