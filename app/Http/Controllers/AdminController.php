<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class AdminController extends Controller
{
    public function addCategory()
    {
        return view('admin.addcategory');
    }

    public function postAddCategory(Request $request)
    {
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return redirect()->back()->with('category_message', 'category added successful');
    }

    public function viewCategory()
    {
        $categories = Category::all();
        return view('admin.viewcategory', compact('categories'));
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('deletecategory_message','deleted successful');
    }

    public function updateCategory($id){
        $category = Category::findOrFail($id);
        return view('admin.updatecategory',compact('category'));
    }

    public function postUpdateCategory(Request $request , $id){
        $category = Category::findOrFail($id); 
        $category->category = $request->updatedcategory;
        $category->save();
        return redirect()->back()->with('categoryupdated_message','category updated successfully');
    }

    public function addProduct(){
        $categories = Category::all();
        return view('admin.addproduct',compact('categories'));
    }

    public function postAddProduct(Request $request){

    }
}
