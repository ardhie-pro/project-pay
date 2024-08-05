<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Adminkeuangan;
use App\Models\M_Adminwemart;

class C_Pengguna extends BaseController
{
    public function __construct()
    {
        // time jakarta
        date_default_timezone_set('asia/jakarta');

        // set sesion
        $this->session = session();

        // deklarasi helper model
        helper(
            [
                'form', 'url', 'array'
            ]
        );
        // 
        $this->keuangan = new M_Adminkeuangan();
        $this->wmart = new M_Adminwemart();
    }
    public function profile()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Profile Pengguna';

        return view('admin/profile', $data);
    }

    // keuangan option_________________________________________________________________________
    // masuk ke halaman tambah user keuangan
    public function tambahadmin()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Tambah Pengguna';
        $data['hasil'] = null;

        return view('halaman/register', $data);
    }

    // INPUT DATA user keuangan
    public function inputuser()
    {
        $user_nm = $this->request->getPost('nama_user');
        $user_name = $this->request->getPost('username');
        $user_pass = $this->request->getPost('pass_user');
        $this->username->insert([
            "nama_user" =>  $user_nm,
            "username" =>  $user_name,
            "pass_user" => md5($user_pass),
        ]);
        return redirect('dataadmin');
    }

    // UPDATE DATA
    public function updatekeuangan($user_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['username'] = $this->username->findAll();
        $data['hasil'] = $this->username->where('user_id', $user_id)->findAll();
        $data['title'] = 'Edit User E-Pay';
        // dimasukan ke dalam form ^
        return view('halaman/register', $data);
    }
    // mesin update
    public function actionkeuangan($user_id = null)
    {
        $user_id = $this->request->getPost('user_id');
        $nama_user = $this->request->getPost('nama_user');
        $username = $this->request->getPost('username');
        $user_pass = $this->request->getPost('pass_user');
        $data['post'] = $this->username->update(
            $user_id,
            [
                "nama_user" => $nama_user,
                "username" => $username,
                "pass_user" => $user_pass,
            ]
        );

        return redirect()->to(base_url('admin/datauser'));
    }
    public function deleteuserkeuangan($user_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->username->delete($user_id);

        return redirect()->to(base_url('dataadmin'));
    }
    // akhir keuangan option_________________________________________________________________________

    // Wmart option___________________________________________________________________________________
    // masuk ke halaman tambah user wmart
    public function tambahwemart()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Tambah User W-Mart';
        $data['hasil'] = null;

        return view('halaman/register', $data);
    }

    // INPUT DATA user wmart
    public function inputwemart()
    {
        $user_nm = $this->request->getPost('nama_user');
        $user_name = $this->request->getPost('adminwemart');
        $user_pass = $this->request->getPost('pass_user');
        $this->wmart->insert([
            "nama_user" =>  $user_nm,
            "adminwemart" =>  $user_name,
            "pass_user" => md5($user_pass),
        ]);
        return redirect('userwemart');
    }

    // UPDATE DATA USER WMART
    public function updateuser($user_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['username'] = $this->username->findAll();
        $data['hasil'] = $this->username->where('user_id', $user_id)->findAll();
        $data['title'] = 'Edit User W-Mart';
        // dimasukan ke dalam form ^
        return view('halaman/register', $data);
    }
    // mesin update user wmart
    public function action($user_id = null)
    {
        $user_id = $this->request->getPost('user_id');
        $nama_user = $this->request->getPost('nama_user');
        $username = $this->request->getPost('username');
        $user_pass = $this->request->getPost('pass_user');
        $data['post'] = $this->username->update(
            $user_id,
            [
                "nama_user" => $nama_user,
                "username" => $username,
                "pass_user" => $user_pass,
            ]
        );

        return redirect()->to(base_url('admin/datauser'));
    }

    public function deleteuserwmart($user_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->username->delete($user_id);

        return redirect()->to(base_url('dataadmin'));
    }
    // akhir wmart option__________________________________________________________________

}
