<?php
class Peserta extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Peserta";
        $data['peserta'] = $this->model('Kelola_Peserta')->getAll();
        $data['kejuruan'] = $this->model('Kelola_Peserta')->getKejuruan();
        $data['desa'] = $this->model('Kelola_Peserta')->getDesa();
        $data['kecamatan'] = $this->model('Kelola_Peserta')->getKecamatan();
        // $data['ubah'] = $this->model('Kelola_Peserta')->getUbah();
        $this->view('templates/header', $data);
        $this->view('peserta/index', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ($this->model('Kelola_Peserta')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/peserta');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/peserta');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kelola_Peserta')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/peserta');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/peserta');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Kelola_Peserta')->getById($_POST['id']));
        // karena memanggil data berupa array associatove, maka tidak akan bisa di echo
        // oleh karena itu dibungkus dengan json_encode agar datanya berupa json
    }

    public function ubah()
    {
        if ($this->model('Kelola_Peserta')->ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/peserta');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/peserta');
            exit;
        }
    }


    public function cari()
    {
        $data['judul'] = "Daftar Peserta";
        $data['peserta'] = $this->model('Kelola_Peserta')->cariData();
        $this->view('templates/header', $data);
        $this->view('peserta/index', $data);
        $this->view('templates/footer');
    }
}
