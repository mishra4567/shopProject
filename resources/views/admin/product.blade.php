{{-- copy from category.blade.php
19.08.2024
--}}
@extends('admin.layout')
@section('page_title', 'Product')
@section('product_select', 'active')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12 ">
            {{-- <span id="product_insert_messege" style="">{{ session('message') }}</span> --}}
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Product</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('admin/product/manage_product') }}" class="alert-link text-success">Add
                                Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40 align-items-center justify-content-center">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            {{-- 23.08.2024  ||  22.39 --}}
                            <th>Image</th>
                            {{-- 23.08.2024  ||  22.39 --}}
                            <th>Category Name</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->slug }}</td>
                                {{-- 23.08.2024  ||  22.39 --}}
                                <td>
                                    @if ($list->image != '')
                                        <a target="_blank" href="{{ asset('storage/media/' . $list->image) }}"
                                            style="cursor: pointer">
                                            <img width="100px" src="{{ asset('storage/media/' . $list->image) }}"
                                                alt="Update Image">
                                        </a>
                                    @endif
                                </td>
                                {{-- 23.08.2024  ||  22.39 --}}
                                <td>{{ $list->category_id }}</td>
                                <td>{{ $list->brand }}</td>
                                <td>{{ $list->model }}</td>
                                <td>
                                    <a href="{{ url('admin/product/delete/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-danger btn-sm" fdprocessedid="cuv2">
                                            <i class="fa fa-rss"></i>&nbsp;Delete</button>
                                    </a>
                                    <a href="{{ url('admin/product/manage_product/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            fdprocessedid="n2mou7">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Edit</button>
                                    </a>
                                    @if ($list->status == 1)
                                        <a href="{{ url('admin/product/status/0') }}/{{ $list->id }}">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                fdprocessedid="94qz51">
                                                <i class="fa fa-star"></i>&nbsp; Active</button>

                                        </a>
                                    @elseif ($list->status == 0)
                                        <a href="{{ url('admin/product/status/1') }}/{{ $list->id }}">
                                            <button type="button" class="btn btn-outline-warning btn-sm"
                                                fdprocessedid="v8cjp">
                                                <i class="fa fa-map-marker"></i>&nbsp; Deactive</button>
                                        </a>
                                    @endif
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
