@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    {{-- header --}}
    <header id="header" class="vh-100 carousel slide" style="padding-top: 104px;" data-bs-ride="carousel">
        <div class="container h-100 d-flex carousel-inner align-items-center">
            <div class="carousel-item active text-center text-white">
                <h2 class="text-capitalize">Best Collection</h2>
                <h1 class="text-uppercase fw-bold py-2">New Arrivals</h1>
                
            </div>
            <div class="carousel-item text-center text-white">

                <h2 class="text-capitalize">Best price & offer</h2>
                <h1 class="text-uppercase fw-bold py-2">new season</h1>
                

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: grey !important;"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="background-color: grey !important;"></span>
        </button>
    </header>
    <!-- header -->
    <!-- products -->
    <section id="recommendation" class="">
    <div class="container">
        <div class="title text-center py-5">
            <h2 class="position-relative d-inline-block">Our Recommendations</h2>
        </div>

        <div class="row pb-5 pt-2 d-flex justify-content-between">
            @php
                $counter = 0;
            @endphp

            @foreach ($viewData['products'] as $product)
                @if ($counter < 3)
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                        <div class="card">
                            <div class="d-flex justify-content-between p-3">
                                <p class="lead mb-0">Products Recommendations</p>

                                <a href="{{ route('product.show', ['id' => $product->getId()]) }}" method="post"
                                    class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                    style="width: 35px; height: 35px; background-color: #3257ee!important;">
                                    <i class="fa fa-shopping-cart text-white" style='font-size:16px;'></i>
                                </a>

                            </div>
                            <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top"
                                alt="{{ $product->getName() }}" style="max-height: 380px;" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><a
                                            href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                            style="color: black; text-decoration:none">{{ $product->getName() }}
                                        </a></h5>
                                    <h5 class="text-dark mb-0">${{ $product->getPrice() }}</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                                    <div class="ms-auto text-warning">
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
                @endif

                @php
                    $counter++;
                @endphp
            @endforeach
        </div>

    </div>
</section>

    <style>
    .title {
        margin-bottom: 2rem;
    }

    .card {
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.5rem;
    }

    .card-img-top {
        object-fit: cover;
    }

    .card-body {
        padding: 1.25rem;
    }

    .card-body h5 {
        margin-bottom: 0.5rem;
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

    .fa-shopping-cart {
        font-size: 1rem;
    }
</style>


@endsection
