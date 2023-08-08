@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="text-center">Products in Cart</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["products"] as $product)
                    <tr>
                        <td>{{ $product->getId() }}</td>
                        <td>{{ $product->getName() }}</td>
                        <td>${{ $product->getPrice() }}</td>
                        <td>{{ session('products')[$product->getId()] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row justify-content-end">
            <div class="col-4 text-end">
                <div class="mb-2">
                    <h5><b>Total to pay:</b> ${{ $viewData["total"] }}</h5>
                </div>
                @if (count($viewData["products"]) > 0)
                <a href="{{ route('cart.purchase') }}" class="btn btn-primary text-black mb-2">Purchase</a>
                <form action="{{ route('cart.delete') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mb-2">
                        Remove all products from Cart
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
