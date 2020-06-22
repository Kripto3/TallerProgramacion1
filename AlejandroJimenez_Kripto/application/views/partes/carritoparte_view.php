<div class="container-fluid" id="carrito">
    <div class="cart" >
        <h3 class="text-center mt-4">Productos en tu Carrito</h3>
        <div class="text" align="center"> 

            <?php  $cart_check = $this->cart->contents();
            // Si el carrito está vacio, mostrar el siguiente mensaje
            if (empty($cart_check)) 
            {
                echo 'Para agregar productos al carrito, click en "Comprar"';
            }  
            ?>    
        </div>
        <div class="alert alert-info">
        <div class="table-responsive">
            <table class="table table-bordered" border="0" cellpadding="5px" cellspacing="1px">

                <?php // Todos los items de carrito en "$cart". 
                if ($cart = $this->cart->contents()): //Esta función devuelve un array de los elementos agregados en el carro
    
                ?>
                    <tr id= "main_heading">
                        <td>ID</td>
                        <td>Descripcion</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Total</td>
                        <td>Accion</td>
                    </tr>

                <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
                echo form_open('carrito_actualiza');
                    $gran_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);

                ?>
                        <tr>
                            <td> <?php echo $i++; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td> $ <?php echo number_format($item['price'], 2); ?></td>
                            <td> 
                            <input type="number" value="<?php echo($item['qty']); ?>" 
                                   name="<?php echo('cart[' . $item['id'] . '][qty]'); ?>" 
                                   min="1"  max="<?php echo($item['stock']); ?>" size="2" maxlength="3" 
                                   class="text-right"/>
                            

                            </td> 
                            <?php $gran_total = $gran_total + $item['subtotal']; ?>
                            <td>$ <?php echo number_format($item['subtotal'], 2) ?></td>
                            <td> <?php $path = '<i class="fa fa-trash text-danger"> Quitar producto</i>'; echo anchor('borra_carrito/'.$item['rowid'], $path); 
                                ?>
                            </td>
                        </tr>
                    <?php 
                    endforeach; 
                    ?>
                        
                    <tr>
                        <td>
                            <b>Total: $
                                <?php //Gran Total
                                echo number_format($gran_total, 2); 
                                ?>
                            </b>
                        </td> 
                        <td colspan="5" align="right">
                            <!-- Borrar carrito usa mensaje de confirmacion javascript implementado en partes/head_view -->
                            <a href="<?php echo base_url('borra_carrito/all');?>" class ='btn btn-danger btn-sm' >Vaciar carrito</a>
                            <!-- Submit boton. Actualiza los datos en el carrito -->    
                            <input type="submit" class ='btn btn-info btn-sm' value="Actualizar">
                            <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
                            <input type="button" class ='btn btn-success btn-sm' value="Confirmar Orden" onclick="window.location = '<?php echo base_url('comprar');?>'">
                        </td>
                    </tr>
                    <?php echo form_close();
                endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br>