{{-- 17.08.2024  || 21.48
copy of manage_category.blade.php
size
--}}
@extends('admin.layout')
@section('page_title', 'Size Manage')
@section('size_select', 'active')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="card">
                <div class="card-header">Manage Size
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ url('admin/size') }}" class="alert-link text-success">Back Page</a>
                </div>
                <div class="">
                </div>
                <div class="card-body">
                    <hr>
                    <form action="{{ route('size.manage_size_process') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="size" class="control-label mb-1">Size</label>
                                    <input id="size" name="size" type="text" class="form-control cc-exp"
                                        value="{{ $size }}" data-val="true" placeholder="Size" autocomplete="size">
                                </div>
                                <span class="help-block">
                                    @error('size')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div>
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
