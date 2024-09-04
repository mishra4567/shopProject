@extends('admin.layout')
@section('page_title', 'Product Manage')
@section('product_select', 'active')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            {{-- 24.08.2024  ||  11.41 --}}
            <form action="{{ route('product.manage_product_process') }}" method="post" novalidate="novalidate"
                enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">Manage Product
                        &nbsp;&nbsp;&nbsp;
                        <a href="{{ url('admin/product') }}" class="alert-link text-success">Back Page</a>
                    </div>
                    <div class="card-body">
                        <hr>
                        {{-- 24.08.2024  ||  11.41 --}}
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
                                        {{-- 24.08.2024  ||  11.39 --}} {{ $id > 0 ? '' : 'required' }}>
                                    {{-- 24.08.2024  ||  11.39 --}}
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
                    </div>
                    {{-- 24.08.2024  ||  11.41 --}}
                </div>
                <div class="card">
                    <div class="card-header">Product Attribute
                    </div>
                    <div class="card-body" id="product_attr_box">
                        {{-- // 25.08.2024  ||  12.00 --}}
                        <?php $loop_count_num = 1; ?>
                        @foreach ($productAttrArr as $key => $val)
                            <?php $loop_count_prev = $loop_count_num; ?>
                            <?php $pAArr = (array) $val; ?>
                            <input type="hidden" id="paid" name="paid[]" value="{{ $pAArr['id'] }}">
                            <div class="" id="product_attr_{{ $loop_count_num++ }}">
                                <hr>
                                {{-- // 25.08.2024  ||  12.00 --}}
                                <div class="row">
                                    <div class="col-3">
                                        <label for="sku" class="control-label mb-1">Sku</label>
                                        <div class="input-group">
                                            <input id="sku" name="sku[]" type="text"
                                                class="form-control cc-cvc" value="{{ $pAArr['sku'] }}" data-val="true"
                                                placeholder="SKU" required>
                                        </div>
                                        <span class="help-block">
                                            @error('sku')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-3">
                                        <label for="mrp" class="control-label mb-1">Mrp</label>
                                        <div class="input-group">
                                            <input id="mrp" name="mrp[]" type="text"
                                                class="form-control cc-cvc" value="{{ $pAArr['mrp'] }}" data-val="true"
                                                placeholder="Mrp" required>
                                        </div>
                                        <span class="help-block">
                                            @error('mrp')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-3">
                                        <label for="price" class="control-label mb-1">Price</label>
                                        <div class="input-group">
                                            <input id="price" name="price[]" type="text"
                                                class="form-control cc-cvc" value="{{ $pAArr['price'] }}"
                                                data-val="true" placeholder="price" required>
                                        </div>
                                        <span class="help-block">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-3">
                                        <label for="qty" class="control-label mb-1">qty</label>
                                        <div class="input-group">
                                            <input id="qty" name="qty[]" type="text"
                                                class="form-control cc-cvc" value="{{ $pAArr['qty'] }}" data-val="true"
                                                placeholder="qty" required>
                                        </div>
                                        <span class="help-block">
                                            @error('qty')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <label for="size_id" class="control-label mb-1">Size</label>
                                        <select name="size_id[]" id="size_id" class="form-control cc-exp">
                                            <option value="">Select size</option>
                                            {{-- // 25.08.2024  ||  12.00 --}}
                                            @foreach ($size as $list)
                                                @if (isset($pAArr['size_id']) && $pAArr['size_id'] == $list->id)
                                                    <option value="{{ $list->id }}" selected>{{ $list->size }}
                                                    </option>
                                                @else
                                                    <option value="{{ $list->id }}">{{ $list->size }}</option>
                                                @endif
                                            @endforeach
                                            {{-- // 25.08.2024  ||  12.00 --}}
                                        </select>
                                        <span class="help-block">
                                            @error('size_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <label for="color_id" class="control-label mb-1">color</label>
                                        <select name="color_id[]" id="color_id" class="form-control cc-exp">
                                            <option value="">Select color</option>
                                            {{-- // 25.08.2024  ||  12.00 --}}
                                            @foreach ($color as $list)
                                                @if (isset($pAArr['color_id']) && $pAArr['color_id'] == $list->id)
                                                    <option value="{{ $list->id }}" selected>{{ $list->color }}
                                                    </option>
                                                @else
                                                    <option value="{{ $list->id }}">{{ $list->color }}</option>
                                                @endif
                                            @endforeach
                                            {{-- // 25.08.2024  ||  12.00 --}}
                                        </select>
                                        <span class="help-block">
                                            @error('color_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="attr_image" class="control-label mb-1">Multi Image</label>
                                            <input id="attr_image" name="attr_image[]" type="file"
                                                class="form-control cc-exp" {{-- 24.08.2024  ||  11.39  --}} {{-- {{ $id > 0 ? '' : 'required' }} --}}>
                                            {{-- 24.08.2024  ||  11.39 --}}
                                        </div>
                                        <span class="help-block">
                                            @error('attr_image')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        {{-- // 25.08.2024  ||  12.00 --}}
                                        @if ($loop_count_num == 2)
                                            <label for="" class="control-label"></label>
                                            <a class="btn btn-primary mt-4 text-white" fdprocessedid="ug9cmj"
                                                onclick="addMore()"><i class="fa fa-plus"></i>&nbsp; &nbsp;Add Attri..</a>
                                        @else
                                            <label for="" class="control-label"></label>
                                            <a class="btn btn-danger mt-4 text-white" fdprocessedid="ug9cmj"
                                                href="{{ Url('admin/product/product_attr_delete/') }}/{{ $pAArr['id'] }}/{{ $id }}"><i
                                                    class="fa fa-minus"></i>&nbsp; &nbsp;Remove..</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-body"> --}}
                <div class="mt-3">
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Submit </span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
                <input type="hidden" name="id" value="{{ $id }}">
            </form>
            {{-- 24.08.2024  ||  11.41 --}}
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
