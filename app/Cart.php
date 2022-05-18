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
       $storedItem = ['qty' => 0, 'precio_1' => $item->precio_1, 'item' => $item];
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
       $this->totalPrice += $item->precio_1;
   }

   public function reduceByOne($id_material)
    {
        $this->items[$id_material]['qty']--;
        $this->items[$id_material]['precio_1']-= $this->items[$id_material]['item']['precio_1'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id_material]['item']['precio_1'];

        if ($this->items[$id_material]['qty']<=0)
        {
            //unset($this->items[$id_material]);
            $this->removeItem($id_material);
           
        }   
    }

    public function removeItem($id_material)
    {
        $this->totalQty -= $this->items[$id_material]['qty'];
        $this->totalPrice -= $this->items[$id_material]['precio_1'];
        unset($this->items[$id_material]);
        if ($this->totalQty<= 0){
            $this->totalPrice= 0;
        }
    }

}  
