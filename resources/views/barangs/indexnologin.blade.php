@extends('barangs.layout')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BARANG</h2>
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
            <th>No</th>
            <th>Nama</th>
            <th>Detail</th>
            <th>Jumlah</th>
        </tr>
        <?php $i=1; ?>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->detail }}</td>
            <td>{{ $barang->jumlah }}</td>
        </tr>
        @endforeach
    </table>
  
      
</div>
@endsection

@extends('barangs.footernologin')
