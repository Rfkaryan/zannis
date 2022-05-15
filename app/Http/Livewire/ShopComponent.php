<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class ShopComponent extends Component
{
    public $sorting;

    public function mount()
    {
        $this->sorting = "default";
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }
    
    use WithPagination;
    public function render()
    {
        if($this->sorting=='date')
        {
            $products = Product::orderBy('created_at','DESC')->paginate($this->paginate);
        }
        else if($this->sorting=="price")
        {
            $products = Product::orderBy('regular_price','ASC')->paginate($this->paginate);
        }
        else if($this->sorting=="price-desc")
        {
            $product = Product::orderBy('regular_price','DECS')->paginate($this->paginate);
        }
        
        $categories = Category::all();

        return view('livewire.shop-component',['products'=>$products],['categories'=>$categories])->layout('layouts.base');
    }
}
