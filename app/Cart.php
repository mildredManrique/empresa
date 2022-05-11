<?php

namespace App;

class Cart
{
   public $items = null;
   public $totalQty = 0;
   public $totalPrice = 0;

   public function __construct($oldCart)
   {
       if ($oldCart) {
           $this->items = $oldCart->items;
           $this->totalQty = $oldCart->totalQty;
           $this->totalPrice = $oldCart->totalPrice;
       }
   }

   public function add($item, $id_material) {
       $storedItem = ['qty' => 0, 'pricio_1' => $item->pricio_1, 'item' => $item];
       if ($this->items) 
       {
           if(array_key_exists($id_material, $this->items))
           {
               $storedItem = $this->items[$id_material];
           }
       }
       
       $storedItem['qty']++;
       $storedItem['precio_1'] = $item->precio_1 * $storedItem['qty'];
       $this->items[$id_material] = $storedItem;
       $this->totalQty++;
       $this->totalPrecio += $item->precio_1;
   }
}  
