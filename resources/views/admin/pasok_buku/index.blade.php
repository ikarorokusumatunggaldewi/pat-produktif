@extends('layouts.app')

@section('content')
<div class="form-group form-inline text-right mb-3">
    <div class="clearfix"></div>
    <div class="controls">
        <form method="post" class=" myform form-group form-inline">
            <label>Periode :</label>
            <input type="text" name="cmbTglAwal" id="tanggal" class="tcal form-control tcalInput" placeholder="YY-MM-DD">
            <br>
            <button type="button" name="btnTampil" class="form-group btn btn-info text-end" onclick="getFilterYear()">Tampilkan</button>
            <button type="button" name="refresh" class="form-group btn btn-primary">Refresh</button>
            <a target="_blank" class="btn btn-success" href="laporan/lap_filter_tgl_penjualan.php?tglin=2021-06-01&amp;tglout=2021-06-13" role="button">Cetak</a>
        </form>
    </div>
</div>
<div class="table-responsive">
    <table class=" table table-hover table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Distributor</th>
            <th>Judul Buku</th>
            <th>NO ISBN</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Jumlah Pasok</th>
            <th>Tanggal</th>
        </thead>
        <tbody id="data_suply">
        </tbody>
    </table>
</div>


{{-- <script src="{{ asset('js/admin/script.js')}}"></script> --}}
@endsection
@section('script')
<script>
    getPasok();

    function getPasok() {
        let url = "{{url('admin/get-pasok')}}"
        $.ajax({
            type: "get",
            url: url,
            beforeSend: function() {
                html = `
                    <tr>
                        <td colspan="10" class="text-center">Sedang mencari data</td>
                    </tr>
                `
                $('#data_suply').html(html);
            },
            success: function(response) {
                $('#data_suply').html('');
                if (response == '') {
                    html = `
                        <tr>
                            <td colspan="10" class="text-center">Tidak ada data.</td>
                        </tr>
                    `
                    $('#data_suply').html(html);
                }
                no = 1
                $.each(response, function(i, val) {
                    html = `
                    <tr>
                        <td>${no}</td>
                        <td>${val.distributor.nama_distributor}</td>
                        <td>${val.book.judul}</td>
                        <td>${val.book.noisbn}</td>
                        <td>${val.book.penulis}</td>
                        <td>${val.book.penerbit}</td>
                        <td>${val.book.harga_jual}</td>
                        <td>${val.book.stok}</td>
                        <td>${val.jumlah}</td>
                        <td>${val.tanggal}</td>
                    </tr>
                    `
                    $("#data_suply").append(html)
                    no++
                })
            }
        });
    }

    function getFilterYear() {
        let tanggal = $('#tanggal').val();
        let url = "{{url('admin/filter-pasok-by-year')}}"
        $.ajax({
            type: "get",
            url: url,
            data: {
                tanggal
            },
            beforeSend: function() {
                html = `
                    <tr>
                        <td colspan="10" class="text-center">Sedang mencari data</td>
                    </tr>
                `
                $('#data_suply').html(html);
            },
            success: function(response) {
                $('#data_suply').html('');
                if (response == '') {
                    html = `
                        <tr>
                            <td colspan="10" class="text-center">Tidak ada data.</td>
                        </tr>
                    `
                    $('#data_suply').html(html);
                }
                no = 1
                $.each(response, function(i, val) {
                    html = `
                    <tr>
                        <td>${no}</td>
                        <td>${val.distributor.nama_distributor}</td>
                        <td>${val.book.judul}</td>
                        <td>${val.book.noisbn}</td>
                        <td>${val.book.penulis}</td>
                        <td>${val.book.penerbit}</td>
                        <td>${val.book.harga_jual}</td>
                        <td>${val.book.stok}</td>
                        <td>${val.jumlah}</td>
                        <td>${val.tanggal}</td>
                    </tr>
                    `
                    $("#data_suply").append(html)
                    no++
                })
            }
        });
    }
</script>
@endsection