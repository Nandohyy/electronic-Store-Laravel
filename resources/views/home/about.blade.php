@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <section class="py-auto my-4" style="padding-top: 10px;">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">
                            About Us
                        </h2>
                    </div>
                    <p class="lead text-muted">Rimberio Electronic
                    </p>
                    <p>Rimberio Electronic dikenal sebagai perusahaan yang fokus pada kualitas
                       dan keunggulan produk. Mereka menawarkan berbagai produk Electronic, 
                       Setiap produk yang dijual oleh Rimberio merupakan produk terbaru dengan fitur-fitur
                      canggih dan desain yang elegan.</p>
                </div>

                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHBlb3BsZSUyMGF0JTIwd29ya3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="" class="img-fluid order-lg-0">
                </div>
            </div>
        </div>
    </section>
@endsection
