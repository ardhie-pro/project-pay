<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Adminwemart;
use App\Models\M_historypembayaran;


class C_Wemart extends BaseController
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

        // set model
        $this->admin = new M_Adminwemart();
        $this->pembayaran = new M_historypembayaran();
    }
    public function home()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginwemart'));
        }
        // $data['baground7'] = $this->baground7->first();
        $data['title'] = 'Dashboard Wemart';

        return view('wmart/dashboard', $data);
    }

    public function user()
    {

        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['title'] = 'Dashboard Wemart';
        $data['admin'] = $this->admin->findAll();
        $data['hasil'] = null;
        return view('admin/userwemart', $data);
    }

    // UPDATE DATA
    public function updateuserwm($user_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['admin'] = $this->admin->findAll();
        $data['hasil'] = $this->admin->where('user_id', $user_id)->findAll();
        $data['title'] = 'Dashboard Wemart';

        return view('admin/userwemart', $data);
    }

    // mesin update
    public function actionwemartuser($user_id = null)
    {
        $user_id = $this->request->getPost('user_id');
        $user_nm = $this->request->getPost('nama_user');
        $adminwemart = $this->request->getPost('adminwemart');
        $user_pass = $this->request->getPost('pass_user');
        $data['post'] = $this->admin->update(
            $user_id,
            [
                "user_id" =>  $user_id,
                "nama_user" =>  $user_nm,
                "adminwemart" =>  $adminwemart,
                "pass_user" => md5($user_pass),
            ]
        );

        return redirect()->to(base_url('userwemart'));
    }
    public function tagihan()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['histori'] = $this->pembayaran->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Data histori siswa ICMBS';


        return view('wmart/history', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url(''));
    }
}
