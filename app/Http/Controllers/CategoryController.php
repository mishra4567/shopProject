<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $result['data'] = Category::all();
        return view('admin/category', $result);
    }
    public function manage_category(Request  $request, $id = '')
    {
        if ($id > 0) {
            $arr = Category::where(['id' => $id])->get();
            $result['category_name'] = $arr['0']->category_name;
            $result['category_slug'] = $arr['0']->category_slug;
            $result['id'] = $arr['0']->id;
        } else {
            $result['category_name'] = '';
            $result['category_slug'] = '';
            $result['id'] = 0;
        }
        return view('admin/manage_category', $result);
    }
    public function manage_category_process(Request $request)
    {
        // echo "Hello";
        // return $request->post();
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories,category_slug,' . $request->post('id'),
        ]);
        if ($request->post('id') > 0) {
            $model = Category::find($request->post('id'));
            $msg = "Category updated";
        } else {
            $model = new Category();
            $msg = "Category inserted";
        }
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        // 17.8.2024 || 20.14
        $model->status = 1;
        // 17.8.2024 || 20.14
        $model->save();
        return redirect('admin/category')->with('message', $msg);
    }

    public function delete(Request $request, $id)
    {
        // echo $id;
        $model = Category::find($id);
        $model->delete();
        return redirect('admin/category')->with('message', 'Category Deleted');
    }
    /**
     * 17.8.2024 || 20.14
     * coped from delete function
     * This is for status update
     */
    public function status(Request $request, $status, $id)
    {
        $model = Category::find($id);
        $model->status = $status;
        $model->save();
        return redirect('admin/category')->with('message', 'Category Status Updated');
    }
    // 17.8.2024 || 20.14

}
