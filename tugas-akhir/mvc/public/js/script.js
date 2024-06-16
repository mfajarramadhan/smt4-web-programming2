// Data Admin
$(function () {

    // Tambah Data
    $('.btnTambahDataUsers').on('click', function () {
        $('#formModalLabel').html('Tambah Data Admin');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#username').val('');
        $('#password').val('');
        $('#id_admin').val('');

    })

    // Ubah Data
    $('.tampilModalUbahUsers').on('click', function () {
        // $('#judulModal').html('Ubah Data Mahasiswa');
        $('#formModalLabel').html('Ubah Data Admin');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/users/ubah');

        // Ajax untuk mengisi nilai didalam field 
        // this adalah tombol yg kita klik
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/users/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#username').val(data.username);
                $('#password').val(data.password);
                $('#id_admin').val(data.id_admin);
                // di javascript menggunakan titik untuk menangkap object, di php pakai ->
                // data.nama || data->nama
            }
        });
    });
});





// Data Kejuruan
$(function () {

    // Tambah Data
    $('.btnTambahDataKejuruan').on('click', function () {
        $('#formModalLabel').html('Tambah Data Kejuruan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#kode_kejuruan').val('');
        $('#kejuruan').val('');
        $('#pelatihan').val('');
        $('#id').val('');

    })

    // Ubah Data
    $('.tampilModalUbahKejuruan').on('click', function () {
        // $('#judulModal').html('Ubah Data Mahasiswa');
        $('#formModalLabel').html('Ubah Data Kejuruan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/kejuruan/ubah');

        // Ajax untuk mengisi nilai didalam field 
        // this adalah tombol yg kita klik
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/kejuruan/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kode_kejuruan').val(data.kode_kejuruan);
                $('#kejuruan').val(data.kejuruan);
                $('#pelatihan').val(data.pelatihan);
                $('#id').val(data.id);
                // di javascript menggunakan titik untuk menangkap object, di php pakai ->
                // data.nama || data->nama
            }
        });
    });
});






// Data Desa
$(function () {

    // Tambah Data
    $('.btnTambahDataDesa').on('click', function () {
        $('#formModalLabel').html('Tambah Data Desa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#kode_desa').val('');
        $('#nama_desa').val('');
        $('#alamat').val('');
        $('#ket').val('');
        $('#id').val('');

    })

    // Ubah Data
    $('.tampilModalUbahDesa').on('click', function () {
        // $('#judulModal').html('Ubah Data Mahasiswa');
        $('#formModalLabel').html('Ubah Data Desa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/desa/ubah');

        // Ajax untuk mengisi nilai didalam field 
        // this adalah tombol yg kita klik
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/desa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kode_desa').val(data.kode_desa);
                $('#nama_desa').val(data.nama_desa);
                $('#alamat').val(data.alamat);
                $('#ket').val(data.ket);
                $('#id').val(data.id);
                // di javascript menggunakan titik untuk menangkap object, di php pakai ->
                // data.nama || data->nama
            }
        });
    });
});







// Data Kecamatan
$(function () {

    // Tambah Data
    $('.btnTambahDataKecamatan').on('click', function () {
        $('#formModalLabel').html('Tambah Data Kecamatan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#kode_kecamatan').val('');
        $('#nama_kecamatan').val('');
        $('#alamat').val('');
        $('#ket').val('');
        $('#id').val('');

    })

    // Ubah Data
    $('.tampilModalUbahKecamatan').on('click', function () {
        // $('#judulModal').html('Ubah Data Mahasiswa');
        $('#formModalLabel').html('Ubah Data Kecamatan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/kecamatan/ubah');

        // Ajax untuk mengisi nilai didalam field 
        // this adalah tombol yg kita klik
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/kecamatan/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kode_kecamatan').val(data.kode_kecamatan);
                $('#nama_kecamatan').val(data.nama_kecamatan);
                $('#alamat').val(data.alamat);
                $('#ket').val(data.ket);
                $('#id').val(data.id);
                // di javascript menggunakan titik untuk menangkap object, di php pakai ->
                // data.nama || data->nama
            }
        });
    });
});






// Data Peserta
$(function () {

    // Tambah Data
    $('.btnTambahDataPeserta').on('click', function () {
        $('#formModalLabel').html('Tambah Data Peserta');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id_kejuruan').val('');
        $('#nik').val('');
        $('#nama').val('');
        $('#tempat_lahir').val('');
        $('#tanggal_lahir').val('');
        $('#jk').val('');
        $('#status_nikah').val('');
        $('#tinggi_badan').val('');
        $('#berat_badan').val('');
        $('#no_telp').val('');
        $('#email').val('');
        $('#alamat').val('');
        $('#id_desa').val('');
        $('#id_kecamatan').val('');
        $('#nama_ortu').val('');
        $('#no_ortu').val('');
        $('#pendidikan').val('');
        $('#asal_sekolah').val('');
        $('#jurusan').val('');
        $('#tujuan').val('');
        $('#ktp').val('');

    })

    // Ubah Data
    $('.tampilModalUbahPeserta').on('click', function () {
        // $('#judulModal').html('Ubah Data Mahasiswa');
        $('#formModalLabel').html('Ubah Data Peserta');
        // $('.nik').attr('type', 'hidden');
        // $('.form-group-nik label').html('');
        $('.form-group-nik').addClass('d-none');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/peserta/ubah');

        // Ajax untuk mengisi nilai didalam field 
        // this adalah tombol yg kita klik
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/smt4/web-programming2/tugas-akhir/mvc/public/peserta/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id_kejuruan').val(data.id_kejuruan);
                $('#nik').val(data.nik);
                $('#nama').val(data.nama);
                $('#tempat_lahir').val(data.tempat_lahir);
                $('#tanggal_lahir').val(data.tanggal_lahir);
                $('#tanggal_lahir').val(data.tanggal_lahir);
                $('#jk').val(data.jk);
                $('#status_nikah').val(data.status_nikah);
                $('#tinggi_badan').val(data.tinggi_badan);
                $('#berat_badan').val(data.berat_badan);
                $('#no_telp').val(data.no_telp);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
                $('#id_desa').val(data.id_desa);
                $('#id_kecamatan').val(data.id_kecamatan);
                $('#nama_ortu').val(data.nama_ortu);
                $('#no_ortu').val(data.no_ortu);
                $('#pendidikan').val(data.pendidikan);
                $('#asal_sekolah').val(data.asal_sekolah);
                $('#jurusan').val(data.jurusan);
                $('#tujuan').val(data.tujuan);
                $('#ktp').val(data.ktp);
                // di javascript menggunakan titik untuk menangkap object, di php pakai ->
                // data.nama || data->nama
            }
        });
    });
});