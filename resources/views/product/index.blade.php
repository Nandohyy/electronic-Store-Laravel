@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <div class="row mt-4 mb-4" >
            @foreach ($viewData['products'] as $product)
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top"
                                alt="{{ $product->getName() }}" style="max-height: 300px;">
                            <div class="overlay bg-dark text-white">
                                <div class="overlay-content">
                                    <h5 class="card-title">{{ $product->getName() }}</h5>
                                    <p class="card-text">${{ $product->getPrice() }}</p>
                                    <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                        class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-text text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
    .card {
        border-radius: 0.5rem;
    }

    .card-img-top {
        object-fit: cover;
        height: 300px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .overlay-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1rem;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card:hover .overlay,
    .card:focus .overlay {
        opacity: 0.8;
    }

    .card:hover .overlay-content,
    .card:focus .overlay-content {
        opacity: 1;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
    }

    .btn-primary {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }

    .text-muted {
        color: #6c757d;
    }

    .text-warning {
        color: #ffc107;
    }

    .fa-star {
        font-size: 1rem;
    }
</style>

@endsection
