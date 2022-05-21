@extends('layouts.layouts')
@section('content')
@section('page_location', '商品作成')
<form action="{{ route('create') }}" method="post">
    @csrf
    <div class="container" id="app">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row m-5">
            <div class="col-md-1">
                <label for="product_name" class="form-label">商品名</label>
            </div>
            <div class="col-md-5" id="product_name_area">
                @foreach (old('product_name', [null]) as $key => $value)
                    <input class="form-control" type="text" id="product_name" name="product_name[]" placeholder="{{ ($key + 1) }}行目" value="{{ $value }}">
                @endforeach
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" name="increase_product_name" id="increase_product_name">行追加</button>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-md-1">
                <label for="price" class="form-label">価格</label>
            </div>
            <div class="col-md-5" id="price_area">
                @foreach (old('price', [null]) as $key => $value)
                    <input class="form-control" type="text" id="price" name="price[]" placeholder="{{ ($key + 1) }}行目" value="{{ $value }}">
                @endforeach
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" name="increase_price" id="increase_price">行追加</button>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-md-1">
                <label for="description" class="form-label">説明</label>
            </div>
            <div class="col-md-5" id="description_area">
                @foreach (old('description', [null]) as $key => $value)
                    <input class="form-control" type="text" id="description" name="description[]" placeholder="{{ ($key + 1) }}行目" value="{{ $value }}">
                @endforeach
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" name="increase_description" id="increase_description">行追加</button>
            </div>
        </div>
        <div class="form-check m-5">
            <input class="form-check-input" type="checkbox" name="bag_hanging" id="bag_hanging" {{ old() ? (old('bag_hanging') ? 'checked' : '') : '' }}>
            <label class="form-check-label" for="bag_hanging">袋掛</label>
        </div>
        <div class="form-check m-5">
            <input class="form-check-input" type="checkbox" name="sold_out" id="sold_out" {{ old() ? (old('sold_out') ? 'checked' : '') : '' }}>
            <label class="form-check-label" for="sold_out">完売</label>
        </div>
        <table class="table w-50 m-5">
            <thead>
                <tr>
                    @for ($i = 1; $i <= 12; $i++)
                        <td>
                            <label class="form-check-label"
                                for="sales_month{{ $i }}">{{ $i }}月</label>
                        </td>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 12; $i++)
                    <td>
                        <input class="form-check-input" type="checkbox" name="sales_month[]"
                            value="{{ $i }}" id="sales_month{{ $i }}"
                            @if (is_array(old('sales_month')))
                                {{ old() ? (in_array($i, old('sales_month')) ? 'checked' : '') : '' }}
                            @endif>
                    </td>
                @endfor
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary m-5">送信</button>
    </div>
</form>
@endsection
