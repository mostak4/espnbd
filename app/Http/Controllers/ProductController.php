<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product () {
        $publushedCategories=Category::where('publication_status','1')->get();
        return view('admin.product.add-product',[
            'publushedCategories' => $publushedCategories
        ]);
    }
    public function saveProductInfo (Request $request) {
        $productImage= $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory= 'product-images/';
        $imageUrl = $directory.$imageName;
        $productImage->move($directory,$imageName);
       // return $imageUrl;
        $product= new Product();
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->Product_price = $request->Product_price;
        $product->Product_description = $request->Product_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product ->save();
        return redirect('/add-product')->with('message' ,'Product Save Success');
    }
    public function manageProductInfo() {
       // $products=Product::all();

        $products = DB::table('products')
            ->join('categories' ,'products.category_id', '=', 'categories.id')
            ->select('products.id','products.product_name','products.Product_price','products.Publication_status','categories.category_name')
            ->get();
       // return $products;
        return view('/admin.product.manage-product',['products'=>$products]);
    }
    public function unpublishedProductInfo ($id){
        $productById= Product::find($id);
        $productById->publication_status=0;
        $productById->save();
        return redirect('/manage-product');

    }
    public function publishedProductInfo ($id){
        $productById= Product::find($id);
        $productById->publication_status=1;
        $productById->save();
        return redirect('/manage-product');

    }

    public function editProductInfo($id){
        $publushedCategories = Category::where('publication_status','1')->get();
        $productById = Product::find($id);
        return view('admin.product.edit-product',
            ['publushedCategories'=>$publushedCategories,'productById'=>$productById]);

    }

    public function deleteProductInfo ($id){
        $productById = Product::find($id);
        $productById->delete();
        return redirect('/manage-product');

    }
    private function saveProductImage($productImage){
        $imageName = $productImage->getClientOriginalName();
        $directory= 'product-images/';
        $imageUrl = $directory.$imageName;
        $productImage->move($directory,$imageName);
        return $imageUrl;
    }
    private function updateProductInfo($request, $imageUrl=null){
        $product=Product::find($request->product_id);
        $product->category_id=$request->category_id;
        $product->product_name=$request->product_name;
        $product->product_code=$request->product_code;
        $product->Product_price=$request->Product_price;
        $product->Product_description=$request->Product_description;
        if($imageUrl){
            $product->product_image=$imageUrl;
        }
        $product->publication_status=$request->publication_status;
        $product->save();
    }
    public function updateProductSaveinfo(Request $request){
        $productImage=$request->file('product_image');
        if($productImage){
            $product=Product::find($request->product_image);
            unlink($product->product_image);
            $imageUrl=$this->saveProductImage($productImage);
            $this->updateProductInfo($request,$imageUrl);
        }else {
            $this->updateProductInfo($request);
        }
        return redirect('manage-product')->with('message','product info update Sccessfully');
    }

}




















































































