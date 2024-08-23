@extends('admin.layout')
@section('page_title', 'Product Manage')
@section('product_select', 'active')
@section('container')
    {{-- 23.08.2024  ||  22.39 --}}
    @if ($id > 0)
        {{ $image_required = '' }}
    @else
        {{ $image_required = 'required' }}
    @endif
    {{-- 23.08.2024  ||  22.39 --}}
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="card">
                <div class="card-header">Manage Product
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ url('admin/product') }}" class="alert-link text-success">Back Page</a>
                </div>
                <div class="">
                </div>
                <div class="card-body">
                    <hr>
                    <form action="{{ route('product.manage_product_process') }}" method="post" novalidate="novalidate"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- 22.08.2024  ||  23.42 --}}
                            <div class="col-6">
                                <label for="category_id" class="control-label mb-1">Category</label>
                                <select name="category_id" id="category_id" class="form-control cc-exp" required>
                                    <option value="">Select Categories</option>
                                    @foreach ($category as $list)
                                        @if (isset($category_id) && $category_id == $list->id)
                                            <option value="{{ $list->id }}" selected>{{ $list->category_name }}</option>
                                        @else
                                            <option value="{{ $list->id }}">{{ $list->category_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            {{-- 22.08.2024  ||  23.42 --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name</label>
                                    <input id="name" name="name" type="text" class="form-control cc-exp"
                                        value="{{ $name }}" data-val="true" placeholder="Name" autocomplete="name">
                                </div>
                                <span class="help-block">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <label for="slug" class="control-label mb-1">Slug</label>
                                <div class="input-group">
                                    <input id="slug" name="slug" type="text" class="form-control cc-cvc"
                                        value="{{ $slug }}" data-val="true" placeholder="Slug">
                                </div>
                                <span class="help-block">
                                    @error('slug')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            {{-- 22.08.2024  ||  23.42 --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1">Image</label>
                                    <input id="image" name="image" type="file" class="form-control cc-exp"
                                        {{-- 23.08.2024  ||  22.39 --}} {{ $image_required }}>
                                    {{-- 23.08.2024  ||  22.39 --}}
                                </div>
                                <span class="help-block">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            {{-- 22.08.2024  ||  23.42 --}}
                            <div class="col-6">
                                <label for="brand" class="control-label mb-1">brand</label>
                                <div class="input-group">
                                    <input id="brand" name="brand" type="text" class="form-control cc-cvc"
                                        value="{{ $brand }}" data-val="true" placeholder="brand">
                                </div>
                                <span class="help-block">
                                    @error('brand')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <label for="model" class="control-label mb-1">model</label>
                                <div class="input-group">
                                    <input id="model" name="model" type="text" class="form-control cc-cvc"
                                        value="{{ $model }}" data-val="true" placeholder="model">
                                </div>
                                <span class="help-block">
                                    @error('model')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="short_desc" class="control-label mb-1">short_desc</label>
                                <div class="input-group">
                                    <input id="short_desc" name="short_desc" type="text" class="form-control cc-cvc"
                                        value="{{ $short_desc }}" data-val="true" placeholder="short_desc">
                                </div>
                                <span class="help-block">
                                    @error('short_desc')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="desc" class="control-label mb-1">desc</label>
                                <div class="input-group">
                                    <input id="desc" name="desc" type="text" class="form-control cc-cvc"
                                        value="{{ $desc }}" data-val="true" placeholder="desc">
                                </div>
                                <span class="help-block">
                                    @error('desc')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="keywords" class="control-label mb-1">keywords</label>
                                <div class="input-group">
                                    <input id="keywords" name="keywords" type="text" class="form-control cc-cvc"
                                        value="{{ $keywords }}" data-val="true" placeholder="keywords">
                                </div>
                                <span class="help-block">
                                    @error('keywords')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="technical_specification"
                                    class="control-label mb-1">technical_specification</label>
                                <div class="input-group">
                                    <input id="technical_specification" name="technical_specification" type="text"
                                        class="form-control cc-cvc" value="{{ $technical_specification }}"
                                        data-val="true" placeholder="technical_specification">
                                </div>
                                <span class="help-block">
                                    @error('technical_specification')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="uses" class="control-label mb-1">uses</label>
                                <div class="input-group">
                                    <input id="uses" name="uses" type="text" class="form-control cc-cvc"
                                        value="{{ $uses }}" data-val="true" placeholder="uses">
                                </div>
                                <span class="help-block">
                                    @error('uses')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mt-3">
                                <label for="warranty" class="control-label mb-1">warranty</label>
                                <div class="input-group">
                                    <input id="warranty" name="warranty" type="text" class="form-control cc-cvc"
                                        value="{{ $warranty }}" data-val="true" placeholder="warranty">
                                </div>
                                <span class="help-block">
                                    @error('warranty')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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
