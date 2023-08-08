@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card bg-light mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start"
                    alt="{{ $viewData['product']->getName() }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $viewData['product']->getName() }}</h5>
                    <p class="card-text">{{ $viewData['product']->getDescription() }}</p>
                    <form action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-auto">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Quantity</span>
                                    </div>
                                    <input type="number" name="quantity" class="form-control quantity-input" value="1"
                                        min="1" max="10">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <p><strong>Price:</strong> ${{ $viewData['product']->getPrice() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
