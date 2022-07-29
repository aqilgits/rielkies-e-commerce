<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\products;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Product extends Component
{
    public function index()
    {
        $data = products::all();
        return view('livewire.product', ['products' => $data]);
    }
    public function detail($id)
    {
        $details = products::find($id);
        return view('livewire.product-details', ['detail' => $details]);
    }
    public function search(Request $req)
    {
        $searchs = products::where('name', 'like', '%' . $req->input('search') . '%')->get();
        return view('livewire.product-search', ['searchs' => $searchs]);
    }
    public function addToCart(Request $req)
    {
        $count = products::where('name', 'like', '%' . $req->input('search') . '%')->get();
        if ($req->session()->has('user')) {
            if (DB::table('cart')
                ->where('user', '=', $req->session()->get('user')['id'])
                ->where('product_id', '=', $req->product_id)
                ->exists()
            ) {
                DB::table('cart')
                    ->where('user', '=', $req->session()->get('user')['id'])
                    ->where('product_id', '=', $req->product_id)
                    ->increment('quantity', 1);

                return redirect('/product');
            } else {
                $cart = new cart;
                $cart->user = $req->session()->get('user')['id'];
                $cart->product_id = $req->product_id;
                $cart->quantity = 1;
                $cart->save();
                return redirect('/product');
            }
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return cart::where('user', $userId)->select('quantity')->get();
    }
    public function cartlist()
    {

        $userId = Session::get('user')['id'];
        $carts = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user', $userId)
            ->select('products.*','cart.*')
            ->get();

        return view('livewire.cart', ['carts' => $carts]);
    }
}
