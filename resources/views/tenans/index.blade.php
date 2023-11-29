@extends('tenans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Tenan Restoran Puja Sera</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tenans.create') }}"> Tambah Tenan</a>
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
            <th>Kode Tenan</th>
            <th>Nama Tenan</th>
            <th>No. Telepon</th>
        </tr>
        @foreach ($tenans as $tenan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tenan->kodeTenan }}</td>
            <td>{{ $tenan->namaTenan }}</td>
            <td>{{ $tenan->no_tlp }}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $tenans->links() !!}
      
@endsection
