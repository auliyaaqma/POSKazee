<div class="card" style="padding: 10px;">
    <div class="card-body">
    <table class="table mb-0 view-datatables product-table table-responsive" style="width:100%">
        <thead class="bg-light">
            <tr>
                <th scope="col" class="border-0">#</th>
                <th scope="col" class="border-0" width="55%">Nama Produk</th>
                <th scope="col" class="border-0" width="15%">Harga</th>
                <th scope="col" class="border-0" width="10%">Foto</th>
                <th scope="col" class="border-0" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key=>$product)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$product->name}}</td>
                <td align="right">Rp. {{number_format($product->price,0,',','.')}}</td>
                <td><img style="width: 50px;" src="{{asset('storage/product_img/'. $product->photo)}}"></td>
                <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <a href="javascript:void(0)" class="btn btn-danger btn-sm delete" style="color: white" data-url="{{url($url.'/delete', $product->id)}}"><i class="fa fa-trash"></i> Delete
                     </a>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

{{-- @push('script') --}}
@push('script')
<script type="text/javascript">
    $('.product-table').DataTable({});
 {{--   console.log("{!! url($url.'/datatable') !!}")
    tabel_news = $('.product-table').DataTable({
        scrollX: true,
        processing: true,
        ajax: {
                url: "{!! url($url.'/datatable') !!}",
            },
        columns: [
            { data: 'no', name: 'no', searchable: false, width: '5%'},
            { data: 'name', name: 'name', width:'20%'},
            { data: 'price', name: 'price'},
            { data: 'photo', name: 'photo'},
            { data: 'action', name: 'action', orderable: false, searchable: false, width:'20%'}
        ],
    });--}}
</script>
@endpush
{{-- @endpush --}}