<?php
class Desa extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Desa";
        $data['desa'] = $this->model('Kelola_Desa')->getAll();
        $this->view('templates/header', $data);
        $this->view('desa/index', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ($this->model('Kelola_Desa')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/desa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/desa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kelola_Desa')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/desa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/desa');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Kelola_Desa')->getById($_POST['id']));
        // karena memanggil data berupa array associatove, maka tidak akan bisa di echo
        // oleh karena itu dibungkus dengan json_encode agar datanya berupa json
    }

    public function ubah()
    {
        if ($this->model('Kelola_Desa')->ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/desa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/desa');
            exit;
        }
    }


    public function cari()
    {
        $data['judul'] = "Daftar Desa";
        $data['desa'] = $this->model('Kelola_Desa')->cariData();
        $this->view('templates/header', $data);
        $this->view('desa/index', $data);
        $this->view('templates/footer');
    }
}
