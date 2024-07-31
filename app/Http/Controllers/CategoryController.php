<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // echo "Hello";
        return view('admin/category');
    }
    public function manage_category()
    {
        return view('admin/manage_category');
    }
    public function manage_category_process(Request $request)
    {
        // echo "Hello";
        // return $request->post();
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);
        $model = new Category();
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        $model->save();
        return redirect('admin/category')->with('message', 'Category inserted');
    }
}
