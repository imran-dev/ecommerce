@extends('frontend.layouts.master')

@section('main-content')

@include('frontend.partials._hero')

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            @foreach ($products as $product)

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Title</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                            </div>
                            <small class="text-muted">BDT 100</small>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</div>
@endsection