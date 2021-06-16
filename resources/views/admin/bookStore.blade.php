@extends('layouts.app')

@section('content')
<div class="card text-center mt-3 mb-5">
    <div class="card-header">
        Admin
    </div>
    <div class="card-body">
        <h2>Toko Buku Kita</h2>
        <img src="{{ ('foto/buku.jpg') }}" style="width:15rem; border-radius:50%" class="mt-3 mb-3">
        <h5 class="card-title">Kamu login sebagai <span class="text-capitalize">{{ Auth::user()->akses }}</span></h5>
        <div style="text-align:center;">
            Jl. Raya Wangun, Kel. Sindangsari
        </div>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer text-muted">
        Copyright 2021 Milik Kita. Powered By WE
    </div>
</div>
@endsection