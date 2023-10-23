<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('v_login');
    }

    public function login()
    {
        $modelUser = new ModelUser();
        if (!$this->validate([
            'txtUsername' => 'required|alpha_numeric_punct|max_length[16]',
            'txtPassword' => 'required|alpha_numeric_punct|max_length[16]'
        ])) {
            return redirect()->to(base_url('auth'))->with('danger', 'Username atau Password salah');
        }
        $dtUser = $modelUser->join('tb_role', 'user_role_id = role_id')
            ->where('user_username', $this->request->getPost('txtUsername'))
            ->where('user_password', md5((string)$this->request->getPost('txtPassword')))
            ->first();
        if (empty($dtUser)) {
            return redirect()->to(base_url('auth'))->with('danger', 'Username atau Password salah');
        }
        session()->set(
            'log_auth',
            [
                'userID' => $dtUser['user_id'],
                'userRole' => $dtUser['role_name'],
                'userName' => ucfirst($dtUser['user_name'])
            ]
        );
        return redirect()->to(base_url());
    }

    public function logout()
    {
        session()->remove('log_auth');
        return redirect()->to(base_url('auth'));
    }
}
