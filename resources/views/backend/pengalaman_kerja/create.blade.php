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
                        <li class="breadcrumb-item active" aria-current="page">Pengalaman Kerja</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
  <!-- Basic Vertical form layout section start -->
  <section id="basic-vertical-layouts">
    {{-- <div class="row match-height"> --}}
        <div class="col-md col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menambahkan Pengalaman Kerja</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" id="pengalaman_kerja_form" method="POST" action="{{ isset($pengalaman_kerja) ? route('pengalaman_kerja.update',$pengalaman_kerja->id) : route('pengalaman_kerja.store') }}">
                            {!! csrf_field() !!}
                            {!! isset($pengalaman_kerja) ? method_field('PUT') : '' !!}
                            <input type="hidden" name="id" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->id : ''}}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama Perusahaan</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Nama Perusahaan" id="nama" name="nama" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->nama : '' }}" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Jabatan</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Jabatan"
                                                id="jabatan" name="jabatan" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->jabatan : '' }}" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Tahun Masuk</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Pilih Tahun..."
                                                id="tahun_masuk" name="tahun_masuk" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_masuk : '' }}" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Tahun Selesai</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Pilih Tahun..."
                                                id="tahun_keluar" name="tahun_keluar" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_keluar : '' }}" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <a href="{{ route('pengalaman_kerja.index') }}"><button class="btn btn-danger ms-2" type="button">Batal</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Vertical form layout section end -->
</div>
@endsection