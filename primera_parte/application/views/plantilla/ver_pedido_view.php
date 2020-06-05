<div class="container fondo-individual text-light">

    <div class="row">

        <div class="col-md-4">
            <h1 class="page-header" style="text-align:left;">Pedido Nº <?php echo $pedido['0']->orden_id; ?></h1>
            
        </div>

        <div class="col-md-4">
            <h1 class="page-header" style="text-align:center;">Fecha <?php echo $pedido['0']->Fecha; ?></h1>
        </div>

    </div>

    


    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <table id="mytable" class="table table-responsive-md table-bordred table-striped table-hover">
                <thead>
                    <th>CLIENTE</th>
                    <th>PRODUCTO</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                </thead>

                <tbody>

                    <?php foreach($pedido as $row) { ?>
                        <tr class= "fondo-item">
                            <td><?php echo $row->nombre; ?> <?php echo $row->apellido; ?></td>
                            <td> <?php echo $row->titulo; ?></td>
                            <td> $<?php echo $row->precio; ?> </td>
                            <td> <?php echo $row->cantidad; ?> </td>
                        </tr>
                    <?php }; ?>
                    
                    <tr>
                        <td>
                            TOTAL: <?php echo $pedido['0']->Total ?>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div>