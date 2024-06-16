<?php
class Kecamatan extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Kecamatan";
        $data['kecamatan'] = $this->model('Kelola_Kecamatan')->getAll();
        $this->view('templates/header', $data);
        $this->view('kecamatan/index', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ($this->model('Kelola_Kecamatan')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kecamatan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kecamatan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kelola_Kecamatan')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kecamatan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/kecamatan');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Kelola_Kecamatan')->getById($_POST['id']));
        // karena memanggil data berupa array associatove, maka tidak akan bisa di echo
        // oleh karena itu dibungkus dengan json_encode agar datanya berupa json
    }

    public function ubah()
    {
        if ($this->model('Kelola_Kecamatan')->ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/kecamatan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/kecamatan');
            exit;
        }
    }


    public function cari()
    {
        $data['judul'] = "Daftar Kecamatan";
        $data['kecamatan'] = $this->model('Kelola_Kecamatan')->cariData();
        $this->view('templates/header', $data);
        $this->view('kecamatan/index', $data);
        $this->view('templates/footer');
    }
}
