<?php

/**
 * 18.08.2024  || 21.40
 * copy from SizeController.php
 */

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *color
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data'] = Color::all();
        return view('admin/color', $result);
    }
    public function manage_color(Request  $request, $id = '')
    {
        if ($id > 0) {
            $arr = Color::where(['id' => $id])->get();
            $result['color'] = $arr['0']->color;
            $result['status'] = $arr['0']->status;
            $result['id'] = $arr['0']->id;
        } else {
            $result['color'] = '';
            $result['status'] = '';
            $result['id'] = 0;
        }
        return view('admin/manage_color', $result);
    }
    public function manage_color_process(Request $request)
    {
        // echo "Hello";
        // return $request->post();
        $request->validate([
            'color' => 'required|unique:colors,color,' . $request->post('id'),
        ]);
        if ($request->post('id') > 0) {
            $model = Color::find($request->post('id'));
            $msg = "Color updated";
        } else {
            $model = new Color();
            $msg = "Color inserted";
        }
        $model->color = $request->post('color');
        // 17.8.2024 || 20.14
        $model->status = 1;
        // 17.8.2024 || 20.14
        $model->save();
        return redirect('admin/color')->with('message', $msg);
    }

    public function delete(Request $request, $id)
    {
        // echo $id;
        $model = Color::find($id);
        $model->delete();
        return redirect('admin/color')->with('message', 'Color Deleted');
    }
    /**
     * 17.8.2024 || 20.14
     * coped from delete function
     * This is for status update
     */
    public function status(Request $request, $status, $id)
    {
        $model = Color::find($id);
        $model->status = $status;
        $model->save();
        return redirect('admin/color')->with('message', 'Color Status Updated');
    }
    // 17.8.2024 || 20.14
}
