<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\M_Adminkeuangan;
use App\Models\M_Adminwemart;
use App\Models\M_siswa;

class C_Login extends BaseController
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
        $this->keuangan = new M_Adminkeuangan();
        $this->wmart = new M_Adminwemart();
        $this->siswa = new M_siswa();
    }
    // wmart control_______________________________________________________________
    public function loginwmart()
    {
        if ($this->session->sudahlogin == 1) {
            return redirect()->to(base_url('wmart'));
        }
        $data['title'] = 'Login W-mart';


        return view('wmart/login', $data);
    }
    public function actionwmart()
    {
        $user = $this->request->getVar('adminwemart');
        $pas = $this->request->getVar('pass_user');
        $data = $this->wmart->where('adminwemart', $user)->first();
        if ($data) {
            $pass = $data['pass_user'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'adminwemart' => $data['adminwemart'],
                    'sudahlogin' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('loginwemart'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('loginwemart'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('loginwemart'));
        }
    }

    public function logoutwmart()
    {
        $this->session->destroy();
        return redirect()->to(base_url('loginwemart'));
    }

    // walisiswa controll
    public function laporan()
    {
        if ($this->session->sudahwali == 1) {
            return redirect()->to(base_url('dashboard'));
        }
        $data['title'] = 'Login Wali';


        return view('depan/login', $data);
    }

    // transfer admin Pribadi

    public function tranferku()
    {
        if ($this->session->sudahwali == 1) {
            return redirect()->to(base_url('adminku'));
        }
        $data['title'] = 'Login';


        return view('depan/transferku', $data);
    }

    public function actionku()
    {
        $user = $this->request->getVar('nis_siswa');
        $pas = $this->request->getVar('pass_siswa');
        $data = $this->siswa->where('nis_siswa', $user)->first();
        if ($data) {
            $pass = $data['pass_siswa'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'siswa_id' => $data['siswa_id'],
                    'nis_siswa' => $data['nis_siswa'],
                    'pin' => $data['pin'],
                    'saldo' => $data['saldo'],
                    'sudahku' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('historitransfer'));
            } else {
                session()->setFlashdata('pass', 'password Siswa salah');
                return redirect()->to(base_url('laporankeuangansiswa'));
            }
        } else {
            session()->setFlashdata('user', 'Nama Siswa tidak diketahui');
            return redirect()->to(base_url('laporankeuangansiswa'));
        }
    }



    public function actionwalimurid()
    {
        $user = $this->request->getVar('nis_siswa');
        $pas = $this->request->getVar('pass_siswa');
        $data = $this->siswa->where('nis_siswa', $user)->first();
        if ($data) {
            $pass = $data['pass_siswa'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'siswa_id' => $data['siswa_id'],
                    'nis_siswa' => $data['nis_siswa'],
                    'pin' => $data['pin'],
                    'saldo' => $data['saldo'],
                    'sudahwali' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('pass', 'password Siswa salah');
                return redirect()->to(base_url('laporankeuangansiswa'));
            }
        } else {
            session()->setFlashdata('user', 'Nama Siswa tidak diketahui');
            return redirect()->to(base_url('laporankeuangansiswa'));
        }
    }


    // keuangan control_____________________________________________________________
    public function loginadmin()
    {
        if ($this->session->sudahlogin == 1) {
            return redirect()->to(base_url('keuangan'));
        }
        $data['title'] = 'Login Admin';

        return view('admin/login', $data);
    }
    public function actionadmin()
    {
        $user = $this->request->getVar('adminkeuangan');
        $pas = $this->request->getVar('pass_user');
        $data = $this->keuangan->where('adminkeuangan', $user)->first();
        if ($data) {
            $pass = $data['pass_user'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'adminkeuangan' => $data['adminkeuangan'],
                    'sudahlogin' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('keuangan'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('loginkeuangan'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('loginkeuangan'));
        }
    }

    public function logoutkeuangan()
    {
        $this->session->destroy();
        return redirect()->to(base_url('loginkeuangan'));
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('wemart'));
    }


    public function logoutkantin()
    {
        $this->session->destroy();
        return redirect()->to(base_url('kantin'));
    }
}
