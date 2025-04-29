@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <div class="mb-3">
        <a href="{{ route('home') }}" class="btn btn-outline-primary">
            <span>&larr;</span> Back to Products
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{ asset($product['image']) }}" class="img-fluid rounded product-detail-img" alt="{{ $product['name'] }}">
                </div>
                <div class="col-md-7">
                    <h1 class="mb-3">{{ $product['name'] }}</h1>
                    <p class="fs-5">{{ $product['description'] }}</p>
                    <p class="fs-2 fw-bold text-primary">${{ number_format($product['price'], 2) }}</p>

                    <button class="btn btn-primary btn-lg mb-4">
                        Add to Cart
                    </button>

                    <h4 class="mt-4 mb-3">Specifications</h4>
                    <table class="table specs-table">
                        <tbody>
                            @foreach($product['specifications'] as $key => $value)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
