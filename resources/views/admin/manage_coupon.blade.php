{{-- 16.0.2024 || 21.58 --}}
{{-- coped from manage_category  --}}
@extends('admin.layout')
@section('page_title', 'Coupon Manage')
{{-- 17.8.2024 || 20.00 --}}
@section('coupon_select', 'active')
{{-- 17.8.2024 || 20.00 --}}
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="card">
                <div class="card-header">Manage Coupon
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ url('admin/coupon') }}" class="alert-link text-success">Back Page</a>
                </div>
                <div class="">
                </div>
                <div class="card-body">
                    {{-- <span id="payment-button-sending" style="">{{ session('message') }}</span> --}}
                    <hr>
                    <form action="{{ route('coupon.manage_coupon_process') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title" class="control-label mb-1">Coupon Name</label>
                                    <input id="title" name="title" type="text" class="form-control cc-exp"
                                        value="{{ $title }}" data-val="true" placeholder="Coupon name"
                                        autocomplete="title">
                                </div>
                                <span class="help-block">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="code" class="control-label mb-1">Coupon code</label>
                                <div class="input-group">
                                    <input id="code" name="code" type="text" class="form-control cc-cvc"
                                        value="{{ $code }}" data-val="true" placeholder="Coupon code">
                                </div>
                                <span class="help-block">
                                    @error('code')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="value" class="control-label mb-1">Coupon value</label>
                                <div class="input-group">
                                    <input id="value" name="value" type="text" class="form-control cc-cvc"
                                        value="{{ $value }}" data-val="true" placeholder="Coupon value">
                                </div>
                                <span class="help-block">
                                    @error('value')
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
