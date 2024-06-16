<?php
class Kejuruan extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Kejuruan";
        $data['kejuruan'] = $this->model('Kelola_Kejuruan')->getAll();
        $this->view('templates/header', $data);
        $this->view('kejuruan/index', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ($this->model('Kelola_Kejuruan')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kejuruan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kejuruan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kelola_Kejuruan')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kejuruan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/kejuruan');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Kelola_Kejuruan')->getById($_POST['id']));
        // karena memanggil data berupa array associatove, maka tidak akan bisa di echo
        // oleh karena itu dibungkus dengan json_encode agar datanya berupa json
    }

    public function ubah()
    {
        if ($this->model('Kelola_Kejuruan')->ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/kejuruan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/kejuruan');
            exit;
        }
    }


    public function cari()
    {
        $data['judul'] = "Daftar Kejuruan";
        $data['kejuruan'] = $this->model('Kelola_Kejuruan')->cariData();
        $this->view('templates/header', $data);
        $this->view('kejuruan/index', $data);
        $this->view('templates/footer');
    }
}
