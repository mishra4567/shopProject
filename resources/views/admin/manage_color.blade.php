{{-- 17.08.2024  || 21.48
copy of manage_size.blade.php
Color
color
--}}
@extends('admin.layout')
@section('page_title', 'Color Manage')
@section('color_select', 'active')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="card">
                <div class="card-header">Manage Color
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ url('admin/color') }}" class="alert-link text-success">Back Page</a>
                </div>
                <div class="">
                </div>
                <div class="card-body">
                    <hr>
                    <form action="{{ route('color.manage_color_process') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="color" class="control-label mb-1">Color</label>
                                    <input id="color" name="color" type="text" class="form-control cc-exp"
                                        value="{{ $color }}" data-val="true" placeholder="Color"
                                        autocomplete="color">
                                </div>
                                <span class="help-block">
                                    @error('color')
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
