<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategoriModel->findAll();
        return view('kategori/index', $data);
    }

    public function create()
    {
        return view('kategori/create');
    }

    public function store()
    {
        $this->kategoriModel->save($this->request->getPost());
        return redirect()->to('/kategori');
    }

    public function edit($id)
    {
        $data['kategori'] = $this->kategoriModel->find($id);
        return view('kategori/edit', $data);
    }

    public function update($id)
    {
        $this->kategoriModel->update($id, $this->request->getPost());
        return redirect()->to('/kategori');
    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);
        return redirect()->to('/kategori');
    }
}
