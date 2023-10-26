@extends('backend/layouts.template')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                <h3>Riwayat Hidup</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Riwayat Hidup</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Pendidikan
                </h5>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <a href="{{ route('pendidikan.create') }}"><button class="btn btn-primary ms-2 mt-3" type="button"><i class="fa fa-user-plus"></i> Tambah</button></a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        
                        <tr>
                            <th>Nama</th>
                            <th>Tingkatan</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendidikan as $row)
                            
                        <tr>
                            <td>{{ $row->nama }}</td>
                            <td>
                                @if ($row->tingkatan==1)
                                TK
                                @elseif ($row->tingkatan==2)
                                SD
                                @elseif ($row->tingkatan==3)
                                SMP
                                @elseif ($row->tingkatan==4)
                                SMA/SMK
                                @elseif ($row->tingkatan==5)
                                D3
                                @elseif ($row->tingkatan==6)
                                D4/S1
                                @elseif ($row->tingkatan==7)
                                S2
                                @elseif ($row->tingkatan==8)
                                S3  
                                @endif
                            </td>
                            <td>{{ $row->tahun_masuk }}</td>
                            <td>{{ $row->tahun_keluar }}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{ route('pendidikan.destroy',$row->id) }}" method="POST">
                                    <a href="{{ route('pendidikan.edit',$row->id) }}" class="btn btn-warning me-1"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection