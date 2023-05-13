<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Product::get();
        return view('dashboard.product.index', [
            'dataProduct' => $table
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = Category::get();
        return view('dashboard.product.tambah', [
            'categories' => $table
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('gambar')){
            $nama_gambar = $request->file('gambar')->store('product-images', 'public');
         }
         // dd($request);
         Product::create([
             'name' => $request->name,
             'price' => $request->price,
             'description' => $request->description,
             'category_id' => $request->category_id,
             'image' => $nama_gambar,
            //  'image' => $request->gambar,
         ]);
 
         return redirect('/dashboard/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $data = product::findOrFail($id);
        return view('dashboard.product.edit', compact('data','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
             'price' => 'required|integer',
             'description' => 'required|max:255|min:10',
             'category_id' => 'required',
             'image' => 'image',
        ]);

        $request->file('gambar') != NULL ? $validated['gambar'] = $request->file('gambar')->store('product-images','public') : '';
        product::find($id)->update($validated);
        return redirect('/dashboard/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $data = product::find($id); 
            $data->delete();
            
            return redirect('/dashboard/product');
    }

    public function order(Request $request)
    {
        
    }
}
