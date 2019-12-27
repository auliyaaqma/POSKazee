@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div id="form-buy" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Transaksi</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        <form action="/transaction" class="form-horizontal form-user" method="POST">  
          <div class="modal-body">
            <div class="col-md-12">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="hidden" name="product_id" id="product_id">
                        <input type="hidden" name="price" id="price">
                        <label>Jumlah Barang</label>
                        <input type="number" class="form-control {{ $errors->has('qty') ? 'is-invalid' : '' }}" name="qty" id="qty" value="{{ old('qty') }}" placeholder="Jumlah Barang">
                        @if ($errors->has('qty'))
                            <div class="invalid-feedback">{{ $errors->first('qty') }}</div>
                        @endif
                     </div>
                     <div class="form-group col-md-6">
                       {{--  <label>Total Harga</label>
                        <font></font> --}}
                     </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert">×</button> 
            </div>
        @endif
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                <div class="card h-100">
                    <div class="cover-image" 
                        @if($product->photo)
                        style="background-image: url({{asset('storage/product_img/'. $product->photo)}});"
                        @else
                        style="background-image: url({{asset('img/icon_keranjang.png')}});"
                        @endif
                    ></div>
                    <div class="card-body">
                        <h6>{{$product->name}}</h6>
                        <font class="price">Rp. {{number_format($product->price,0,',','.')}}</font>
                    </div>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="buy" data-toggle="modal" data-target="#form-buy" data-id="{{encrypt($product->id)}}"><i class="fa fa-cart-plus" data-url="{{url('/admin/product', encrypt($product->id))}}"></i> Beli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 text-xs-center kader-agenda">
                    {{ $products->links() }}
            </div>
        </div>

    </div>
@endsection

@section('script')
<script type="text/javascript">
   $(document).on('click', '.buy', function(event) {
        event.preventDefault();
        id = $(this).data('id');
        $('#product_id').val(id);
        url =  $(this).data('url');
    });
</script>
@endsection
