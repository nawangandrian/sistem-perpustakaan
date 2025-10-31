<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PenulisModel;

class BukuController extends BaseController
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
        $data['buku'] = $this->bukuModel->getBukuWithRelation();
        return view('buku/index', $data);
    }

    public function create()
    {
        $data['kategori'] = $this->kategoriModel->findAll();
        $data['penulis'] = $this->penulisModel->findAll();
        return view('buku/create', $data);
    }

    public function store()
    {
        $rules = [
            'judul_buku' => 'required|min_length[3]',
            'id_penulis' => 'required|is_natural_no_zero',
            'id_kategori' => 'required|is_natural_no_zero',
            'tahun_terbit' => 'permit_empty|numeric',
            'stok' => 'required|is_natural'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'judul_buku'   => $this->request->getPost('judul_buku'),
            'id_penulis'   => $this->request->getPost('id_penulis'),
            'id_kategori'  => $this->request->getPost('id_kategori'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'stok'         => $this->request->getPost('stok'),
        ];

        $this->bukuModel->save($data);
        return redirect()->to('/buku')->with('success', 'Buku ditambahkan.');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        $data['kategori'] = $this->kategoriModel->findAll();
        $data['penulis'] = $this->penulisModel->findAll();
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $this->bukuModel->update($id, $this->request->getPost());
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku');
    }
}
