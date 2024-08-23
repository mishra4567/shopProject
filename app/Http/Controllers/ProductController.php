<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * product
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data'] = Product::all();
        return view('admin/product', $result);
    }
    public function manage_product(Request  $request, $id = '')
    {
        // p($request->all());
        // die;
        if ($id > 0) {
            $arr = Product::where(['id' => $id])->get();
            $result['category_id'] = $arr['0']->category_id;
            $result['slug'] = $arr['0']->slug;
            $result['name'] = $arr['0']->name;
            $result['image'] = $arr['0']->image;
            $result['brand'] = $arr['0']->brand;
            $result['model'] = $arr['0']->model;
            $result['short_desc'] = $arr['0']->short_desc;
            $result['desc'] = $arr['0']->desc;
            $result['keywords'] = $arr['0']->keywords;
            $result['technical_specification'] = $arr['0']->technical_specification;
            $result['uses'] = $arr['0']->uses;
            $result['warranty'] = $arr['0']->warranty;
            $result['status'] = $arr['0']->status;
            $result['id'] = $arr['0']->id;
        } else {
            $result['slug'] = '';
            $result['name'] = '';
            $result['image'] = '';
            $result['brand'] = '';
            $result['model'] = '';
            $result['short_desc'] = '';
            $result['desc'] = '';
            $result['keywords'] = '';
            $result['technical_specification'] = '';
            $result['uses'] = '';
            $result['warranty'] = '';
            $result['status'] = '';
            $result['id'] = 0;
        }
        // {{-- 22.08.2024  ||  23.42 --}}
        // category in a array
        $result['category'] = DB::table('categories')->where(['status' => 1])->get();
        // echo "<pre>";
        // print_r($result['category']);
        // die();
        // {{-- 22.08.2024  ||  23.42 --}}

        return view('admin/manage_product', $result);
    }
    public function manage_product_process(Request $request)
    {
        // echo "Hello";
        // return $request->post();
        // {{-- 23.08.2024  ||  22.39 --}}
        if ($request->post('id') > 0) {
            $image_validation = "mimes:png,jpg,jpeg";
        } else {
            $image_validation = "required|mimes:png,jpg,jpeg";
        }
        // {{-- 23.08.2024  ||  22.39 --}}
        $request->validate([
            'name' => 'required',
            // {{-- 22.08.2024  ||  23.42 --}}
            // 'image' => 'required|mimes:png,jpg,jpeg',
            // {{-- 23.08.2024  ||  22.39 --}}
            'image' => $image_validation,
            // {{-- 23.08.2024  ||  22.39 --}}
            // {{-- 22.08.2024  ||  23.42 --}}
            'slug' => 'required|unique:products,slug,' . $request->post('id'),
            $request->post('id'),
        ]);
        if ($request->post('id') > 0) {
            $model = Product::find($request->post('id'));
            $msg = "Product updated";
        } else {
            $model = new Product();
            $msg = "Product inserted";
        }
        // {{-- 22.08.2024  ||  23.42 --}}
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $model->image = $image_name;
        }
        // {{-- 22.08.2024  ||  23.42 --}}

        $model->category_id = $request->post('category_id');
        $model->slug = $request->post('slug');
        $model->name = $request->post('name');
        // $model->image = $request->post('image');
        $model->brand = $request->post('brand');
        $model->model = $request->post('model');
        $model->short_desc = $request->post('short_desc');
        $model->desc = $request->post('desc');
        $model->keywords = $request->post('keywords');
        $model->technical_specification = $request->post('technical_specification');
        $model->uses = $request->post('uses');
        $model->warranty = $request->post('warranty');
        $model->status = 1;
        $model->save();
        return redirect('admin/product')->with('message', $msg);
    }

    public function delete(Request $request, $id)
    {
        $model = Product::find($id);
        $model->delete();
        return redirect('admin/product')->with('message', 'Product Deleted');
    }
    /**
     * coped from delete function
     * This is for status update
     */
    public function status(Request $request, $status, $id)
    {
        $model = Product::find($id);
        $model->status = $status;
        $model->save();
        return redirect('admin/product')->with('message', 'Product Status Updated');
    }
}
