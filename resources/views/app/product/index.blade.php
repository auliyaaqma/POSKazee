@extends('layouts.admin')
@section('title','Product')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-small">
            <div class="card-header border-bottom">
                <h6 class="m-0">Form Tambah</h6>
            </div>
            <div class="card-body d-flex py-0">
                <div class="row" style="padding: 10px;">
                    <div class="col-md-12">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                            </div>
                        @endif

                        <form action="{{url($url)}}" class="form-horizontal form-user" method="POST" enctype="multipart/form-data">  
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="form1-name" class="col-form-label">Nama Produk</label>
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" id="name" placeholder="Nama Produk">
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="form1-email" class="col-form-label">Harga</label>
                                    <input type="number" name="price" id="price" min="0" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" value="{{ old('description') }}" placeholder="Harga Produk">
                                    @if ($errors->has('price'))
                                        <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="form1-state" class="col-form-label">Gambar</label>
                                    <input type="file" name="photo" class="form-control" accept="image/jpeg,image/jpg,image/png">
                                    @if ($errors->has('photo'))
                                        <div class="invalid-feedback">{{ $errors->first('photo') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-success btn-block submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 md-4">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Daftar Produk</h6>
            </div>
            @include($view.'.table')
        </div>
    </div>

</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(function () {
    // $('.product-table').DataTable({});
    $('.submit').on('click',function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            swal({
                title: "Are you sure?",
                text: " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((isConfirm) => {
                if (isConfirm) {
                    form.submit();
                }
            });
        });
    
    $(document).on('click', '.delete', function(event) {
            url = $(this).data('url');
            swal({
              title: "Are you sure?",
              text: " ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Data berhasil dihapus!", {
                  icon: "success",
                });
                setTimeout(function() {
                    location.replace(url);
                }, 1000);
              }
            });
        });
});
</script>
@endsection
