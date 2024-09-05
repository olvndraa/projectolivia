<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'category' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'photo' => 'image|nullable|max:1999'
    ]);

    $product = new Product();
    $product->name = $request->input('name');
    $product->category = $request->input('category');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->stock = $request->input('stock');

    if ($request->hasFile('photo')) {
        $fileName = time().'.'.$request->photo->extension();  
        $request->photo->storeAs($fileName);
        $product->photo = $fileName;
    } else {
        $product->photo = 'default.jpg';
    }

    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
}

     

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
    
        if ($request->hasFile('photo')) {
            if ($product->photo && Storage::exists('public/'.$product->photo)) {
                Storage::delete('public/'.$product->photo);
            }
            $fileName = time().'.'.$request->photo->extension();  
            $request->photo->storeAs($fileName);
            $product->photo = $fileName;
        }
    
        $product->save();
    
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }
    


    public function destroy(Product $product)
    {
        if (Storage::exists('public/' . $product->photo)) {
            Storage::delete('public/' . $product->photo);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
