@extends('admin.layout')
@section('container')
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="card">
                <div class="card-header">Manage Category
                    &nbsp;&nbsp;&nbsp;
                    <a href="category" class="alert-link text-success">Back Page</a>
                </div>
                <div class="">
                </div>
                <div class="card-body">
                    <span id="payment-button-sending" style="">{{ session('message') }}</span>
                    <hr>
                    <form action="{{ route('category.insert') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category_name" class="control-label mb-1">Categoy Name</label>
                                    <input id="category_name" name="category_name" type="text"
                                        class="form-control cc-exp" value="" data-val="true"
                                        placeholder="Categoy name" autocomplete="category_name">
                                    <span class="help-block">
                                        @error('category_name'){{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="category_slug" class="control-label mb-1">Categoy slug</label>
                                <div class="input-group">
                                    <input id="category_slug" name="category_slug" type="text" class="form-control cc-cvc"
                                        value="" data-val="true" placeholder="Categoy slug">
                                    <span class="help-block">
                                        @error('category_slug'){{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                {{-- <i class="fa fa-lock fa-lg"></i>&nbsp; --}}
                                <span id="payment-button-amount">Submit </span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
