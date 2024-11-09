<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function products(Request $request){

        if($request->isMethod('post')){

                $validated = $request->validate([
        
                    'product_id' => 'required|integer',
                    'name' => 'required|string',
                    'description' => 'string',
                    'price' => 'required|numeric',
                    'stock' => 'integer',
                    'image' => 'string'
        
                ]);
        
                $data = new Product(); 
        
                   $data->product_id = $validated['product_id'];
                   $data->name = $validated['name'];
                   $data->description = $validated['description'];
                   $data->price = $validated['price'];
                   $data->stock = $validated['stock'];
                   $data->image = $validated['image'];
                   $data->save();

                   $data = Product::paginate(10);
                   return view('index', compact('data')); // Pass data to the view

        }
    
        else
        {
            $data = new Product(); 
            $data = Product::paginate(10); // Fetch all data from the table
            return view('index', compact('data')); // Pass data to the view
        }
           
    }

    function create(Request $request){

        return view("create");
    }

    function show(Request $request, $id){

      
            
            $data = Product::where('id','=',$id)->get();
            return view("show",compact('data'));

    }

    function edit(Request $request, $id){

        $data = Product::findOrFail($id);
        return view("edit",compact('data'));
    }

    function update(Request $request, $id){
        $validated = $request->validate([
        
            
            'name' => 'required|string',
            'description' => 'string',
            'price' => 'required|numeric',
            'stock' => 'integer',
            'image' => 'string'

        ]);
        $user = Product::findOrFail($id);

        $user->update($validated);
        $data = Product::paginate(10); // Fetch all data from the table
        return view('index', compact('data')); // Pass data to the view
            
        
    }
    function delete(Request $request, $id){
        $validated = $request->validate([
        
            
            'name' => 'required|string',
            'description' => 'string',
            'price' => 'required|numeric',
            'stock' => 'integer',
            'image' => 'string'

        ]);
        $user = Product::findOrFail($id);

        $user->delete($validated);
        $data = Product::paginate(10); // Fetch all data from the table
        return view('index', compact('data')); // Pass data to the view
            
        
    }

}
