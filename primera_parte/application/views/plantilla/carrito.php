<h1 class="text-center text-light">Carrito de compras</h1>
<h2 class="text-center"><?php echo $message ?></h2>
<table id="mytable" class="table table-responsive-md table-bordred table-striped fondo-item text-light">
    <?php if ($cart = $this->cart->contents()): ?>
        <thead>
            <td>Nº item</td>
            <td>Titulo</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Subtotal</td>
            <td>Acción</td>
        </thead>
    <tbody>
        <?php
            $i = 1;
            foreach ($cart as $item):
        ?>

        <tr>
            <td>
                <?php echo $i++; ?>
            </td>
            <td>
                <?php echo $item['name']; ?>
            </td>
            <td>
                $ <?php echo $this->cart->format_number($item['price'],2); ?>
            </td>
            <td>
                <?php echo $item['qty']; ?>
            </td>
            <td>
                $ <?php echo $this->cart->format_number($item['subtotal'],2); ?>
            </td>
            <td>
                <?php echo anchor('carrito_controller/borrar/'.$item['rowid'],'Eliminar'); ?>
            </td>
        </tr>

        <?php endforeach; ?>

        <tr>

            <td>Total Compra:$<?php echo number_format($this->cart->total(),2); ?></td>
            <td><button type="button" class="btn btn-primary" onclick="limpiar_carito()">Vaciar
            carrito</button></td>
            <?php ?>
                    <td><button type="button" class="btn btn-primary" onclick="stock_disponible()">Ordenar Compra</button></td>
            <?php 
                
            ?>

            
        </tr>
        <?php endif; ?>
    </tbody>
</table>

<script>

    function limpiar_carito() {
        var result = confirm('Desea vaciar el carrito?');
        if(result) {
            window.location = "<?php echo base_url(); ?>carrito_controller/borrar/all";
        }else{
            return false; // cancela al acción
        }
    }

    function stock_disponible() {
        
        if("<?php echo base_url(); ?>pedido_controller/stock_disponible") {
            alert('GRACIAS POR SU COMPRA');
            window.location =  "<?php echo base_url(); ?>guardar_pedido";
            
        }else{
            alert('No se pudo realizar la compra por exeder el stock del producto');
        }
    }

</script>