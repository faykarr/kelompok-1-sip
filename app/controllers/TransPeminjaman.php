<?php

class TransPeminjaman extends Controller {
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function fromdetail($id)
    {
        $data = [
            'title' => 'Detail Peminjaman | Perpusku',
            'detaildata' => $this->model('TransPeminjamanModel')->getDetailPeminjaman($id),
            'bukuDiPinjam' => $this->model('TransPeminjamanModel')->getBukuDipinjam($id),
        ];
        $this->view('templates/header', $data);
        $this->view('peminjaman/detail', $data);
        $this->view('templates/footer');
        $this->view('templates/navbar', $data);
    }
}