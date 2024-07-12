<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->User = new UsersModel();
    }

    public function index()
    {
        $data['users'] = $this->User->getUsers();
        return view('users/index', $data);
    }
    public function tambah()
    {
        return view('users/tambah');
    }
    public function simpan()
    {
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $kelamin = $this->request->getVar('kelamin');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = [
            'nama_users' => $nama,
            'kelamin_users' => $kelamin,
            'username' => $username,
            'password' => $password
        ];

        $this->User->save($data);
        return redirect()->to('/users');
    }
    public function ubah($id)
    {
        $data['users'] = $this->User->getUsers($id);
        return view('users/ubah', $data);
    }
    public function update()
    {
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $kelamin = $this->request->getVar('kelamin');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = [
            'id_users' => $id,
            'nama_users' => $nama,
            'kelamin_users' => $kelamin,
            'username' => $username,
            'password' => $password
        ];
        $this->User->save($data);
        return redirect()->to('/users');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/users');
    }
}
