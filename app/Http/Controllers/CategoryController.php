<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category () {
        return view('admin.category.add-category');
    }
    public function saveCategoryInfo(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/add-category')->with('message', 'Category Info Save Success');
    }
    public function manageCategoryInfo () {
        $categories = Category::all();
      return view('admin.category.manage-category',['categories' => $categories]);

    }

    public function unpublushedCategoryInfo ($id) {

        $categoryById= Category::find($id);
        $categoryById->publication_status=0;
        $categoryById->save();
        return redirect('/manage-category');
    }

    public function publushedCategoryInfo ($id) {

        $categoryById= Category::find($id);
        $categoryById->publication_status=1;
        $categoryById->save();
        return redirect('/manage-category');
    }
    public function deleteCategoryInfo ($id){
        $categoryById= Category::find($id);
        $categoryById->delete();
        return redirect('/manage-category');

    }
    public function editCategoryInfo($id) {
        $categoryById=Category::find($id);
       // return $categoryById;
        return view('admin.category.edit-category',['categoryById'=>$categoryById]);
    }

    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        //return $category;
        return redirect('/category-manage');
    }
}



























