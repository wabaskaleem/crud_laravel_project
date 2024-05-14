<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class productController extends Controller
{
    public function index(){
       
        return view('products.index',['products' => products::latest()->paginate(5)
    ]);
    }

    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        //  dd($request->all());
        //validate data
        $request->validate([
            'name'=> 'required',
            'Description'=> 'required',
            'image' => 'required|mimes:jpeg,JPG,png,gif,|max:10000'
        ]);

        //uploadimg
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);
       

        $product = new products;
        $product->name= $request->name;
        $product->Description = $request->Description;
        $product->image= $imageName;
        

        $product->save();
        return back()->withSuccess('Product Created Successfully!!!!');

    }

    public function edit($id){
        $products = products::where('id',$id)->first();
        return view('products.edit
        ',['products' => $products]);
    }

    public function update(request $request,$id){
        $request->validate([
            'name'=> 'required',
            'Description'=> 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif,|max:10000'
        ]);

        $product = products::where('id',$id)->first();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image= $imageName;
        }
        //uploadimg
        
        $product->name= $request->name;
        $product->Description = $request->Description;
       
        

        $product->save();
        return back()->withSuccess('Product Updated Successfully!!!!');
    }


    public function Destory($id){
      $products =   products::where('id',$id)->first();
      $products -> delete();
      return back();

    }

    
    public function show($id){
        $products =   products::where('id',$id)->first();
        return view('products.show',['products'=>$products]);
  
      }
}
