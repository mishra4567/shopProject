@extends('admin.layout')
{{-- 16.8.2024 || 21.58 --}}
@section('page_title', 'Category')
{{-- 16.8.2024 || 21.58 --}}
{{-- 17.8.2024 || 20.00 --}}
@section('category_select', 'active')
{{-- 17.8.2024 || 20.00 --}}
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12 ">
            {{-- <span id="category_insert_messege" style="">{{ session('message') }}</span> --}}
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Category</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="category/manage_category" class="alert-link text-success">Add Category</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DATA TABLE-->
            {{-- <div class="card-header">Manage Category
                &nbsp;&nbsp;&nbsp;
                <a href="category" class="alert-link text-success">Back Page</a>
            </div>
            <div class="">
            </div> --}}
            <div class="table-responsive m-b-40 align-items-center justify-content-center">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                {{-- 16.0.2024 || 21.58 --}}
                                <td>{{ $loop->iteration }}</td>
                                {{-- 16.0.2024 || 21.58 --}}
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->category_name }}</td>
                                <td>{{ $list->category_slug }}</td>
                                <td>
                                    <a href="{{ url('admin/category/delete/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-danger btn-sm" fdprocessedid="cuv2">
                                            <i class="fa fa-rss"></i>&nbsp;Delete</button>
                                    </a>
                                    <a href="{{ url('admin/category/manage_category/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            fdprocessedid="n2mou7">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Edit</button>
                                    </a>
                                    {{-- 17.08.2024  ||  20.15 --}}
                                    @if ($list->status == 1)
                                        <a href="{{ url('admin/category/status/0') }}/{{ $list->id }}">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                fdprocessedid="94qz51">
                                                <i class="fa fa-star"></i>&nbsp; Active</button>

                                        </a>
                                    @elseif ($list->status == 0)
                                        <a href="{{ url('admin/category/status/1') }}/{{ $list->id }}">
                                            <button type="button" class="btn btn-outline-warning btn-sm"
                                                fdprocessedid="v8cjp">
                                                <i class="fa fa-map-marker"></i>&nbsp; Deactive</button>
                                        </a>
                                    @endif
                                    {{-- 17.08.2024  ||  20.15 --}}
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
