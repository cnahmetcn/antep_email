@extends('layouts.dashboard')
@section('title','Product Ekle')
@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Ürün Ekle</div>
        <div class="card-body">
            <form action="{{route('save-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Ürün Adı</label>
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Ürün Fiyatı</label>
                    <input type="number" class="form-control" name="product_price" id="product_price">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">foto</label>
                    <input type="file" name="product_photo" id="product_photo">
                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        Kaydet
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
