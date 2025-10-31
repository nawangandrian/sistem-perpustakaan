<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PenulisModel;

class Dashboard extends BaseController
{
    protected $bukuModel;
    protected $kategoriModel;
    protected $penulisModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
        $this->kategoriModel = new KategoriModel();
        $this->penulisModel = new PenulisModel();
    }

    public function index()
    {
        $data = [
            'total_buku' => $this->bukuModel->countAll(),
            'total_kategori' => $this->kategoriModel->countAll(),
            'total_penulis' => $this->penulisModel->countAll(),
        ];
        return view('dashboard/index', $data);
    }
}
