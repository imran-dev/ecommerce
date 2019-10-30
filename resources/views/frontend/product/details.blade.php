@extends('frontend.layouts.master')

@section('main-content')

    <div class="container">
        <div class="product-details">
            <div class="card">
                <div class="container-fliud">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="preview-pic">
                                <img src="{{ $product->getFirstMediaUrl('products') }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ $product->name }}</h3>

                            <p class="product-description">{{ $product->description }}</p>
                            <h4 class="price">current price: <span>BDT {{ $product->sale_price }}</span></h4>

                            <div class="action">
                                <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
