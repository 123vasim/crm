<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::paginate(3);
        return view('category.index',compact('data'));
    }
    public function create(){
        return view('category.create');
    }
     public function store(Request $request){  
        $request->validate([
            'name' => 'required|unique:category',
            'description'=>'required',
        ]);
            $category = new Category();
            $category->name= $request->name;
            $category->description= $request->description;
            $category->status= 1;
            $category->save();
        return redirect('/category/index')->with('success',"Category create successfully");
    }
    public function status($id){
        $data = Category::where('id',$id)->first();
        if ($data->status==1) 
        {
            $data->status=0;
            $data->save();
        }
        else
        {
             $data->status=1;
            $data->save();
        }
        return redirect('/category/index')->with('success',"category status Updated");
    }
    public function delete($id){
        Category::where('id', $id)->delete();
        return redirect('/category/index')->with('success',"category data deleted successfully");
    } 
    public function edit($id){
        $data = Category::where('id', $id)->first();
        return view('category.edit',compact('data'));
    }
    public function update(Request $request,$id){  
        $request->validate([
            'name' => 'required|unique:category,name,'.$id,
            'description'=>'required',
        ]);
            $category =  Category::find($id);
            $category->name= $request->name;
            $category->description= $request->description;
            $category->status= 1;
            $category->update();
        return redirect('/category/index')->with('success',"Category create successfully");
    } 
}
