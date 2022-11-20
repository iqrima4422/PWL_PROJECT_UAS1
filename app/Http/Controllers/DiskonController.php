<?php

namespace App\Http\Controllers;
use App\Models\Diskon;
use App\Models\Supplier;
use Illuminate\Http\Request;

use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DiskonController extends Controller
{
    // create data diskon
    public function createDiskon()
    {
        $supplier = supplier::all();
        $tittle = 'Create ';
        return view('AdminView.createDataDiskon', compact('supplier', 'tittle'));
    }

    // fungsi store data product
    public function storeDiskon(Request $request)
    {
       //melakukan validasi data
        $request->validate([
        'product' => 'required',
        'kategori' => ['required'],
        'merk' => ['required'],
        'stok' => 'required|numeric',
        'harga' => 'required|numeric',
        'gambar'=>'required',
        'supplier'=>'required',
        ]);

        if($request->file('gambar')){
            $image_name = $request->file('gambar')->store('image', 'public');
        }
        
        $diskon = new Diskon();
        $diskon -> product = $request->get('product');
        $gambar = $request->file('gambar')->store('gambar', 'public');
        $diskon -> gambar = $gambar;
        $diskon -> kategori = $request->get('kategori');
        $diskon -> merk = $request->get('merk');
        $diskon -> stok = $request->get('stok');
        $diskon -> harga = $request->get('harga');
        $diskon -> supplier_id = $request->get('supplier');
        $diskon -> save();

        return redirect('/dataDiskon') -> with('success', 'Data Barang berhasil Ditambahkan');
    }

    public function destroydiskon($id)
    {
        Diskon::where('id', $id)->delete();
        return redirect('/dataDiskon')-> with('success', 'Barang  Berhasil Dihapus');
    }
    
    function editdiskon($id)
    {
        $diskon = Diskon::find($id);
        $supplier = Supplier::all();
        return view('AdminView.editDataDiskon',['tittle' => 'Edit Data Product',
            'diskon' => $diskon,
            'supplier' => $supplier
        ]);
    }

    function updateDataDiskon(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'product' => 'required',
            'kategori' => 'required',
            'merk' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'required',
            'supplier' => 'required',
            ]);

            if($request -> hasFile('gambar')){
                $diskon = Diskon::with('suppliers')->where('id', $id)->first();
                // $product -> id = $request->get('id');
                $diskon -> product = $request->get('product');
                $gambar = $request->file('gambar')->store('gambar', 'public');
                $diskon -> gambar = $gambar;
                $diskon -> kategori = $request->get('kategori');
                $diskon -> merk = $request->get('merk');
                $diskon -> stok = $request->get('stok');
                $diskon -> harga = $request->get('harga');
                $diskon -> supplier_id = $request->get('supplier');
                $diskon->save();
                return redirect('/dataDiskon')->with('success', 'Data Berhasil Diubah');
            } else {
               $diskon = Diskon::with('suppliers')->where('id', $id)->first();
                // $product -> id = $request->get('id');
                $diskon -> product = $request->get('product');
                $diskon -> kategori = $request->get('kategori');
                $diskon -> merk = $request->get('merk');
                $diskon -> stok = $request->get('stok');
                $diskon -> harga = $request->get('harga');
                $diskon -> supplier_id = $request->get('supplier');
                $diskon->save();
                return redirect('/dataDiskon')->with('success', 'Data Berhasil Diubah');
            }
    }
    function cetakDataDiskon()
    {
        $dataDiskon = Diskon::with('suppliers')->get();
        $pdf = PDF::loadView('AdminView.cetakDataDiskon',['dataDiskon' => $dataDiskon]);
        return $pdf->download('Data Diskon.pdf');
    }

    public function cartdiskon()
    {
        return view('HomePage.shoppingcartdiskon', ['tittle' => 'Keranjang Belanja']);
    }

    public function addToCartDiskon($id)
    {
        $diskon = Diskon::findOrFail($id);
        
        $cartdiskon = session()->get('cartdiskon', []);
  
        if(isset($cartdiskon[$id])) {
            $cartdiskon[$id]['quantity']++;
        } else {
            $cartdiskon[$id] = [
                "id" => $id,
                "product" => $diskon->product,
                "quantity" => 1,
                "kategori" => $diskon->kategori,
                "harga" => $diskon->harga,
                "gambar" => $diskon->gambar
            ];
        }
          
        session()->put('cartdiskon', $cartdiskon);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}

