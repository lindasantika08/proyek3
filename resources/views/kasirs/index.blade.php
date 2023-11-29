@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kasir Restoran Puja Sera</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kasirs.create') }}"> Tambah Kasir</a>
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
            <th>Kode Kasir</th>
            <th>Nama Kasir</th>
            <th>No. Telepon</th>
        </tr>
        @foreach ($kasirs as $kasir)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kasir->KodeKasir }}</td>
            <td>{{ $kasir->namaKasir }}</td>
            <td>{{ $kasir->no_tlp }}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $kasirs->links() !!}
      
@endsection
