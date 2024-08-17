{{-- copy of category.blade.php --}}
@extends('admin.layout')
@section('page_title', 'size')
@section('size_select', 'active')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12 ">
            {{-- <span id="size_insert_messege" style="">{{ session('message') }}</span> --}}
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Size</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('admin/size/manage_size') }}" class="alert-link text-success">Add Size</a>
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
                            <th>size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->size }}</td>
                                <td>
                                    <a href="{{ url('admin/size/delete/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-danger btn-sm" fdprocessedid="cuv2">
                                            <i class="fa fa-rss"></i>&nbsp;Delete</button>
                                    </a>
                                    <a href="{{ url('admin/size/manage_size/') }}/{{ $list->id }}">
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            fdprocessedid="n2mou7">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Edit</button>
                                    </a>
                                    @if ($list->status == 1)
                                        <a href="{{ url('admin/size/status/0') }}/{{ $list->id }}">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                fdprocessedid="94qz51">
                                                <i class="fa fa-star"></i>&nbsp; Active</button>

                                        </a>
                                    @elseif ($list->status == 0)
                                        <a href="{{ url('admin/size/status/1') }}/{{ $list->id }}">
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
