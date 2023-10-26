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
  <!-- Basic Vertical form layout section start -->
  <section id="basic-vertical-layouts">
    {{-- <div class="row match-height"> --}}
        <div class="col-md col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ isset($pendidikan) ? 'Mengubah' : 'Menambahkan' }} Pendidikan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" id="pengalaman_kerja_form" method="POST" action="{{ isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) : route('pendidikan.store') }}">
                            {!! csrf_field() !!}
                            {!! isset($pendidikan) ? method_field('PUT') : '' !!}
                            <input type="hidden" name="id" value="{{ isset($pendidikan) ? $pendidikan->id : ''}}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama Sekolah</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Nama Sekolah" id="nama" name="nama" value="{{ isset($pendidikan) ? $pendidikan->nama : '' }}" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Tingkatan</label>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="tingkatan">Options</label>
                                                <select class="form-select" id="tingkatan" name="tingkatan">
                                                    <option selected>Choose...</option>
                                                    <option value="1" {{ (isset($pendidikan) && $pendidikan->tingkatan == 1) ? 'selected' : '' }}>TK</option>
                                                    <option value="2" {{ (isset($pendidikan) && $pendidikan->tingkatan == 2) ? 'selected' : '' }}>SD</option>
                                                    <option value="3" {{ (isset($pendidikan) && $pendidikan->tingkatan == 3) ? 'selected' : '' }}>SMP</option>
                                                    <option value="4" {{ (isset($pendidikan) && $pendidikan->tingkatan == 4) ? 'selected' : '' }}>SMA/SMK</option>
                                                    <option value="5" {{ (isset($pendidikan) && $pendidikan->tingkatan == 5) ? 'selected' : '' }}>D3</option>
                                                    <option value="6" {{ (isset($pendidikan) && $pendidikan->tingkatan == 6) ? 'selected' : '' }}>D4/S1</option>
                                                    <option value="7" {{ (isset($pendidikan) && $pendidikan->tingkatan == 7) ? 'selected' : '' }}>S2</option>
                                                    <option value="8" {{ (isset($pendidikan) && $pendidikan->tingkatan == 8) ? 'selected' : '' }}>S3</option>
                                                </select>
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Tahun Masuk</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" placeholder="Pilih Tahun..."
                                                id="tahun_masuk" name="tahun_masuk" value="{{ isset($pendidikan) ? $pendidikan->tahun_masuk : '' }}" required>
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
                                                <input type="number" class="form-control" placeholder="Pilih Tahun..."
                                                id="tahun_keluar" name="tahun_keluar" value="{{ isset($pendidikan) ? $pendidikan->tahun_keluar : '' }}" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <a href="{{ route('pendidikan.index') }}"><button class="btn btn-danger ms-2" type="button">Batal</button></a>
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