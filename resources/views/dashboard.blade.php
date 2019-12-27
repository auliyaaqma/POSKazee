@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100"  style="text-align: center">
            <div class="card-header no-border">
               Jumlah User
            </div>
            <div class="card-body d-flex py-0">
               {{$count_user}}
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100" style="text-align: center">
            <div class="card-header no-border" >
               Jumlah Produk
            </div>
            <div class="card-body d-flex p-10">
               {{$count_product}}
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
        <div class="card card-small h-100" style="text-align: center">
            <div class="card-header no-border" >
               Grafik Pembelian
            </div>
            <div class="card-body d-flex p-10">       
            </div>
        </div>
    </div>
</div>
@endsection