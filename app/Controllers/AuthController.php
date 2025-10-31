<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = session();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $this->session->set([
                'logged_in' => true,
                'id_user'   => $user['id_user'],
                'nama_lengkap' => $user['nama_lengkap'],
                'role' => $user['role'],
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
