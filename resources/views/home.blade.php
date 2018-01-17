@extends('frontend_layout')

@section('css')
    <link rel="stylesheet" href="/css/home.css" type="text/css">
@endsection()

@section('content')
    <div class="row">

    @foreach($product as $products)
        <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-image" src="/img/placeholder4.png">
                <div class="product-item-description">
                    <p>{{ $products->name }}</p>
                    <p>{{ $products->price }}</p>
                    <p>Discount {{ $products->diskon }}</p>
                </div>
                <div class="product-item-cta">
                    <button class="btn btn-primary beli-cta" data-id="{{ $products->id }}">Beli</button>
                </div>
            </div>
        </div>
        @endforeach    
    
@endsection

@section('js')

    <script>
    $(".beli-cta").on("click", function(event) {
        var el = event.target
        var id = $(el).data('id');
        alert("Tambah cart: "+id);

        $.post('/cart/add-content', 
        {id: id}, 
        function(){
            refreshCart();
        });
    });
    
    </script>


@endsection