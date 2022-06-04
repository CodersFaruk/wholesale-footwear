<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.product.index',compact('categories'));
    }

    public function store(Request $request){
        $validated = $request->validate(
            [
                'product_name' => 'required|max:191',
                'cat_id' => 'required',
                'product_code' => 'required|max:50',
                'product_price' => 'required',
                'product_details' => 'required',
                'product_size' => 'required',
                'product_image' => 'required',
            ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->cat_id = $request->cat_id;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_details = $request->product_details;
        $product->product_size = $request->product_size;
//         photo upload
        $product_image = $request->file('product_image');
        $imageName = time() . rand() . '.' . $product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(800,800)->save('productImage/'.$imageName);
        $dbUrl='productImage/'.$imageName;
        $product->product_image=$dbUrl;
        $product->save();
        return redirect()->route('show.product');


    }

    public function show()
    {
        $products = Product::all();
        return view('admin.product.show', compact('products'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $file = ($product->product_image);
        if (File::exists($file)) {
            File::delete($file);
            $product->delete();
        } else {
            $product->delete();
        }
        return redirect()->back();

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories=Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }

    public function update( Request $request,$id){
        $validated = $request->validate(
            [
                'product_name' => 'required|max:191',
                'cat_id' => 'required',
                'product_code' => 'required|max:50',
                'product_price' => 'required',
                'product_details' => 'required',
                'product_size' => 'required',
            ]);


        $product = Product::findOrFail($id);
        if ($request->product_image) {
            $product->product_name = $request->product_name;
            $product->cat_id = $request->cat_id;
            $product->product_code = $request->product_code;
            $product->product_price = $request->product_price;
            $product->product_details = $request->product_details;
            $product->product_size = $request->product_size;
            // delete previous image
            $file = ( $product->product_image);
            if (File::exists($file)) {
                File::delete($file);
            }
            // photo upload
            $product_image = $request->file('product_image');
            $imageName = time() . rand() . '.' . $product_image->getClientOriginalExtension();
            Image::make($product_image)->resize(800,800)->save('productImage/'.$imageName);
            $dbUrl='productImage/'.$imageName;
            $product->product_image=$dbUrl;
            $product->save();
            return redirect()->route('show.product');
        } else {
            $product->product_name = $request->product_name;
            $product->cat_id = $request->cat_id;
            $product->product_code = $request->product_code;
            $product->product_price = $request->product_price;
            $product->product_details = $request->product_details;
            $product->product_size = $request->product_size;
            $product->save();
            return redirect()->route('show.product');
        }
    }



}
