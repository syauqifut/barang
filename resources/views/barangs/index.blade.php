@extends('barangs.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BARANG</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barangs.create') }}"> Buat Barang Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div style="height: 75%; overflow: scroll;">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Detail</th>
                <th>Jumlah</th>
                <th width="280px">Aksi</th>
            </tr>
            <?php $i = 1; ?>
            @foreach ($barangs as $barang)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->detail }}</td>
                <td>{{ $barang->jumlah }}</td>
                <td>
                    <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        @if ($isadmin == 1)
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        @else
                            <button type="submit" class="btn btn-danger" disabled>Hapus</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>


</div>
@endsection

@extends('barangs.footer')