@extends('frontend_layout')


@section('content')
   <div class="row">
        <div class="col-md-6">
                <table class="table table-bordered">
                <tr>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th>Harga</th>        
                </tr>

                @foreach($productSelected as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $qty[$product->id] }}</td>
                    <td>{{ $product->price }}</td>       
                </tr>
                @endforeach
                </table>
                <div>
                    Total: {{ $total }}
                </div>
                <div>
                    <a clas="btn btn-primary" href="#">
                    Checkout</a>
                </div>
        </div>
   </div>
   
@endsection
