<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PenulisModel;

class PenulisController extends BaseController
{
    protected $penulisModel;

    public function __construct()
    {
        $this->penulisModel = new PenulisModel();
    }

    public function index()
    {
        $data['penulis'] = $this->penulisModel->findAll();
        return view('penulis/index', $data);
    }

    public function create()
    {
        return view('penulis/create');
    }

    public function store()
    {
        $this->penulisModel->save($this->request->getPost());
        return redirect()->to('/penulis');
    }

    public function edit($id)
    {
        $data['penulis'] = $this->penulisModel->find($id);
        return view('penulis/edit', $data);
    }

    public function update($id)
    {
        $this->penulisModel->update($id, $this->request->getPost());
        return redirect()->to('/penulis');
    }

    public function delete($id)
    {
        $this->penulisModel->delete($id);
        return redirect()->to('/penulis');
    }
}
