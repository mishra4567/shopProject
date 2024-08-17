<?php

/**
 * 17.08.2024  || 21.13
 * copy from CouponController
 */

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $result['data'] = Size::all();
        return view('admin/size', $result);
    }
    public function manage_size(Request  $request, $id = '')
    {
        if ($id > 0) {
            $arr = Size::where(['id' => $id])->get();
            $result['size'] = $arr['0']->size;
            $result['status'] = $arr['0']->status;
            $result['id'] = $arr['0']->id;
        } else {
            $result['size'] = '';
            $result['status'] = '';
            $result['id'] = 0;
        }
        return view('admin/manage_size', $result);
    }
    public function manage_size_process(Request $request)
    {
        // echo "Hello";
        // return $request->post();
        $request->validate([
            'size' => 'required|unique:sizes,size,' . $request->post('id'),
        ]);
        if ($request->post('id') > 0) {
            $model = Size::find($request->post('id'));
            $msg = "Size updated";
        } else {
            $model = new Size();
            $msg = "Size inserted";
        }
        $model->size = $request->post('size');
        // 17.8.2024 || 20.14
        $model->status = 1;
        // 17.8.2024 || 20.14
        $model->save();
        return redirect('admin/size')->with('message', $msg);
    }

    public function delete(Request $request, $id)
    {
        // echo $id;
        $model = Size::find($id);
        $model->delete();
        return redirect('admin/size')->with('message', 'Size Deleted');
    }
    /**
     * 17.8.2024 || 20.14
     * coped from delete function
     * This is for status update
     */
    public function status(Request $request, $status, $id)
    {
        $model = Size::find($id);
        $model->status = $status;
        $model->save();
        return redirect('admin/size')->with('message', 'Size Status Updated');
    }
    // 17.8.2024 || 20.14
}
