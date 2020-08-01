<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MainController extends CustomController
{
    //
    /**
     * MainController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $products = Products::with('kategori')->get();
        return view('home')->with(['products' => $products]);
    }

    public function detail($id)
    {
        $product = Products::with('kategori')->where('id', '=', $id)->firstOrFail();
        $kategori = $product->kategori->id;
        $products = Products::with('kategori')->whereHas('kategori', function (Builder $query) use($kategori){
            $query->where('id', '=', $kategori);
        })->get();
        $products->take(4);
        return view('detail')->with(['product' => $product, 'products' => $products->take(4)]);
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        $user = User::findOrFail(auth()->id());
        return view('user.profil.profil')->with(['user' => $user]);
    }

    public function updateProfile()
    {
        $data = [
            'nama' => $this->postField('nama'),
            'phone' => $this->postField('phone'),
            'email' => $this->postField('email'),
            'alamat' => $this->postField('alamat'),
        ];

        $this->update(User::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
