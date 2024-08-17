@extends('admin.layout')
{{-- 16.8.2024 || 21.58 --}}
@section('page_title', 'Category Manage')
{{-- 16.8.2024 || 21.58 --}}
{{-- 17.8.2024 || 20.00 --}}
@section('category_select', 'active')
{{-- 17.8.2024 || 20.00 --}}
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="card">
                <div class="card-header">Manage Category
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ url('admin/category') }}" class="alert-link text-success">Back Page</a>
                </div>
                <div class="">
                </div>
                <div class="card-body">
                    {{-- <span id="payment-button-sending" style="">{{ session('message') }}</span> --}}
                    <hr>
                    <form action="{{ route('category.manage_category_process') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category_name" class="control-label mb-1">Categoy Name</label>
                                    <input id="category_name" name="category_name" type="text"
                                        class="form-control cc-exp" value="{{ $category_name }}" data-val="true"
                                        placeholder="Categoy name" autocomplete="category_name">
                                </div>
                                <span class="help-block">
                                    @error('category_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <label for="category_slug" class="control-label mb-1">Categoy slug</label>
                                <div class="input-group">
                                    <input id="category_slug" name="category_slug" type="text"
                                        class="form-control cc-cvc" value="{{ $category_slug }}" data-val="true"
                                        placeholder="Categoy slug">
                                </div>
                                <span class="help-block">
                                    @error('category_slug')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                {{-- <i class="fa fa-lock fa-lg"></i>&nbsp; --}}
                                <span id="payment-button-amount">Submit </span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                        <input type="hidden" name="id" value="{{ $id }}">
                    </form>
                </div>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
