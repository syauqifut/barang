@extends('barangs.layout')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LOG BARANG</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th rowspan="2">Aksi</th>
            <th colspan="2">Barang</th>
            <th rowspan="2">Oleh</th>
        </tr>
        <tr>
            <th>Id barang</th>
            <th>Ket Barang</th>
        </tr>
        <?php $i=1; ?>
        @forelse ($logbarangs as $key => $item)
        <tr>
            <td>{{ $item['aksi'] }}</td>
            <td>{{ $item['id barang'] }}</td>
            <td>{{ $item['ket barang'] }}</td>
            <td>{{ $item['oleh'] }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Data Not Found</td>
        </tr>
        @endforelse
    </table>
  
      
</div>
@endsection

