@extends('layouts.front')


@section('content')

    <div class="container">

        <h2> {{ $categoryName ?? null }} Products </h2>

        <div class="custom-row-2">
            @foreach ($products as $product)
                <x-product.single_product :product="$product"/>

            @endforeach

        </div>


    </div>

@endsection
