
    <section class="container page-content">
        <h1 class="text-left display-4 mt-4">¿Realizar compra?</h1>
        <br>
        <p class="mb-4 ml-3 mr-2 text-left">
            A continuaci&oacute;n se muestra el resumen de la compra a realizar.
        </p>
        <div class="alert alert-info">
            <h5>Datos del comprador:</h5>
            <h4>Nombre: <?php echo $nombre;  ?> <?php echo $apellido;  ?> - Email: <?php echo $email;  ?></h4>
            <hr/>
            <table class="table table-bordered" style="background-color: mintcream;">

                    <?php // Todos los items de carrito en "$cart". 
                    if ($cart = $this->cart->contents()): //Esta función devuelve un array de los elementos agregados en el carro
          
                    ?>
                    <thead>
                        <th>Detalles de Compra</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Sub total</th>
                    </thead>
                        <tr>
                           
                        </tr>

                        <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
                        echo form_open('carrito_actualiza');
                            foreach ($cart as $item):
                                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                                <tr>
                                    <td>
                                        <?php echo $item['name']; ?>
                                    </td>
                                    <td>
                                        $ <?php echo number_format($item['price'], 2); ?>
                                    </td>
                                    <td>
                                        <?php echo $item['qty']; ?>
                                    </td>

                                    <td>
                                        $ <?php echo number_format($item['subtotal'], 2) ?>
                                    </td>
                                </tr>
                            <?php 
                            endforeach; 
                            ?>
                            <tr>
                                <?php
                                { 
                                    $total_compra = $this->cart->total(); 
                                ?> 
                                <tr>
                                    <th colspan="3">Total A Pagar</th>
                                    <td class="font-weight-bold" >
                                        $<?php echo number_format ($total_compra, 2);  ?>
                                    </td>  
                                </tr>              
                                <?php } ?>
                            </tr>
                            <?php echo form_close();
                        endif; ?>
                    </table> 
        </div>
        <div class="row">
            <div class="col-4">
                <a  class="btn btn-outline-dark" href="<?php echo base_url("catalogo");?>">Volver al carrito</a>
                <a  class="btn btn-outline-success ml-2" href="<?php echo base_url("confirmar_compra");?>">Finalizar Compra</a>
            </div>
        </div>
        <br/>
    </section>

