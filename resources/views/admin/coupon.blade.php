{{--
16.0.2024 || 21.58
coped from category
--}}
@extends('admin.layout')
@section('page_title', 'Coupon')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12 ">
            {{-- <span id="coupon_insert_messege" style="">{{ session('message') }}</span> --}}
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Coupon</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="coupon/manage_coupon" class="alert-link text-success">Add Coupon</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive m-b-40 align-items-center justify-content-center">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Id</th>
                            <th>Coupon Name</th>
                            <th>Coupon Code</th>
                            <th>Coupon Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->title }}</td>
                                <td>{{ $list->code }}</td>
                                <td>{{ $list->value }}</td>
                                <td>
                                    <a href="{{ url('admin/coupon/delete/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-danger btn-sm" fdprocessedid="cuv2">
                                            <i class="fa fa-rss"></i>&nbsp;Delete</button>
                                    </a>
                                    <a href="{{ url('admin/coupon/manage_coupon/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            fdprocessedid="n2mou7">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Edit</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
