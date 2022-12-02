<?php

class precioTotal {
    public static function precioTotalPedido($total){
      
      $precio=0;
  
      foreach($total as $precioT){
        
        $precio+=$precioT->getProducto()->getPrecio()*$precioT->getCantidad();
  
      }
  
      return $precio;
  
    }
  }

?>