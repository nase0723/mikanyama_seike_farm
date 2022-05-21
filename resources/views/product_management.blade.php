@extends('layouts.layouts')
@section('content')
@section('page_location', '商品一覧')
<div class="w-75 m-5">
    <a href="{{ route('create') }}" class="btn btn-primary mx-auto">新規追加</a>
</div>
<table class="table table-hover table-bordered m-5 w-75 text-center">
    <thead class="table-dark">
        <tr class="">
            <td>#</td>
            <td class="text-start">商品名</td>
            <td>完売</td>
            <td>編集</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $i => $row)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td class="w-75 text-start">
                    @foreach ($row->product_names as $i => $value) 
                        {!! $i ? '<br>' : '' !!} 
                        {{ $value->product_name }} 
                    @endforeach
                </td>
                <td><font color="red">{{ $row->sold_out ? '完売' : '' }}</font></td>
                <td><a href="{{ route('edit', ['id'=>$row->id]) }}" class="text-decoration-none">編集</a></td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection