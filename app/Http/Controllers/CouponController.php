<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * {{-- 16.08.2024 || 21.58 --}}
     *  Coped to Categorycontroller
     */
    public function index()
    {
        $result['data'] = Coupon::all();
        return view('admin/coupon', $result);
    }
    public function manage_coupon(Request  $request, $id = '')
    {
        if ($id > 0) {
            $arr = Coupon::where(['id' => $id])->get();


            $result['title'] = $arr['0']->title;
            $result['code'] = $arr['0']->code;
            $result['value'] = $arr['0']->value;
            $result['id'] = $arr['0']->id;
        } else {
            $result['title'] = '';
            $result['code'] = '';
            $result['value'] = '';
            $result['id'] = 0;
        }

        return view('admin/manage_coupon', $result);
    }
    public function manage_coupon_process(Request $request)
    {
        // echo "Hello";
        // return $request->post();
        $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons,code,' . $request->post('id'),
            'value' => 'required',
        ]);
        if ($request->post('id') > 0) {
            $model = Coupon::find($request->post('id'));
            $msg = "Coupon updated";
        } else {
            $model = new Coupon();
            $msg = "Coupon inserted";
        }
        $model->title = $request->post('title');
        $model->code = $request->post('code');
        $model->value = $request->post('value');
        $model->save();
        return redirect('admin/coupon')->with('message', $msg);
    }

    public function delete(Request $request, $id)
    {
        // echo $id;
        $model = Coupon::find($id);
        $model->delete();
        return redirect('admin/coupon')->with('message', 'Coupon Deleted');
    }
    /**
     * 17.8.2024 || 20.14
     * coped from delete function
     * This is for status update
     */
    public function status(Request $request, $status, $id)
    {
        $model = Coupon::find($id);
        $model->status = $status;
        $model->save();
        return redirect('admin/coupon')->with('message', 'Coupon Status Updated');
    }
    // 17.8.2024 || 20.14
}
