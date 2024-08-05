<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\M_siswa;
use App\Models\M_historypembayaran;
use App\Models\M_Admintenda;
use App\Models\M_tenda;



class C_Tenda extends BaseController
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
        $this->siswa = new M_siswa();
        $this->pembayaran = new M_historypembayaran();
        $this->tenda = new M_Admintenda();
        $this->tendaop = new M_tenda();
    }


    // index controller ________________________________________________
    public function indextenda()
    {
        if ($this->session->sudahindex == 1) {
            return redirect()->to(base_url('passwordtenda'));
        }

        $data['title'] = 'Pembayaran Siswa';
        return view('tenda/nispay', $data);
    }

    public function actionindextenda()
    {
        $nis = $this->request->getVar('nis_siswa');
        $data = $this->siswa->where('nis_siswa', $nis)->first();

        if ($data) {
            $nisp = $data['nis_siswa'];

            if ($nis == $nisp) {
                $ses_data = [
                    'nis' => $data['nis_siswa'],
                    'keterangan' => $data['keterangan'],
                    'sudahindex' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('passwordtenda'));
            }
        } else {
            session()->setFlashdata('tdk', ' e-pay anda belum terdaftar');
            return redirect()->to(base_url(''));
        }
    }

    //pass controller ____________________________________________________

    public function passwordtenda()
    {
        if ($this->session->sudahindex != 1) {
            return redirect()->to(base_url(''));
        }
        $ket = 'BLOKIR';
        if ($this->session->keterangan == $ket) {
            session()->setFlashdata('pin', 'karena e-pay anda telah diblokir');
            return redirect()->to(base_url(''));
        }
        $data['title'] = 'Password E-pay Siswa';
        return view('tenda/passwordpay', $data);
    }

    public function actionpasstenda()
    {
        $nis = $this->request->getVar('nis_siswa');
        $pas = $this->request->getVar('pass_siswa');
        $data = $this->siswa->where('nis_siswa', $nis)->first();
        if ($data) {
            $pass = $data['pass_siswa'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'siswa_id' => $data['siswa_id'],
                    'pin' => $data['pin'],
                    'saldo' => $data['saldo'],
                    'nama_siswa' => $data['nama_siswa'],
                    'sudahpass' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('nominaltenda'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('passwordtenda'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('passwordtenda'));
        }
    }

    // nominal controller
    public function nominaltenda()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url(''));
        }
        $data['tenda'] = $this->tenda->findAll();
        $data['title'] = 'Nominal Pembayaran Siswa';
        return view('tenda/pembayaranpay', $data);
    }

    public function actionnominaltenda()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url(''));
        }
        $siswa_id = $this->session->siswa_id;
        $saldoawal = $this->session->saldo;
        $tenda = $this->request->getPost('adminwemart');
        $pembayaran = $this->request->getPost('pembayaran');
        if ($pembayaran == 0) {
            $data['title'] = 'Anda Memasukan Nol';
            return view('depan/kesalahan', $data);
        }
        $saldoakhir = $saldoawal - $pembayaran;
        $siswa_name = $this->session->nama_siswa;
        $nis = $this->session->nis;
        $pin = $this->session->pin;
        if ($saldoawal < $pembayaran) {
            $data['title'] = 'Saldo Tidak Cukup';
            return view('tenda/kesalahan', $data);
        } else {
            $this->tendaop->insert([
                "nama_siswa" =>  $siswa_name,
                "tenda" =>  $tenda,
                "saldo" =>  $pembayaran,
                "nis_siswa" =>  $nis,
                "pin" =>  $pin,
            ]);
            $data['post'] = $this->siswa->update(
                $siswa_id,
                [
                    "saldo" =>  $saldoakhir,
                ]
            );
            return redirect('logouttenda');
        }
    }

    public function saldotenda()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url(''));
        }
        $data['title'] = 'Saldo E-Pay Siswa';
        return view('tenda/saldopay', $data);
    }

    public function thankstenda()
    {
        $data['title'] = 'Pembayaran Tuntas';

        return view('tenda/thanks', $data);
    }

    public function blokirtenda()
    {
        $data['title'] = 'Blokir';

        return view('tenda/blokir', $data);
    }

    public function statusblokirtenda()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }

        $data['siswa'] = $this->siswa->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Data siswa ICMBS';


        return view('admin/blokir', $data);
    }

    public function historitenda()
    {
        $data['title'] = 'Data Pengeluaran Siswa';
        $data['histori'] = $this->pembayaran->findAll();
        return view('siswa/historypembelian', $data);
    }

    // admin tenda
    public function admintenda()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['tenda'] = $this->tenda->findAll();
        $data['title'] = 'Asrama | ICMBS';
        $data['hasil'] = null;
        return view('admin/admintenda1', $data);
    }

    public function aksitenda($adminwemart = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['tenda'] = $this->tenda->where('adminwemart', $adminwemart)->findAll();
        $data['tendaop'] = $this->tendaop->findAll();
        $data['title'] = 'Admin Tenda';
        $data['hasil'] = null;

        return view('admin/admintenda2', $data);
    }

    public function tendaadmin()
    {
        if ($this->session->sudahlogintenda == 1) {
            return redirect()->to(base_url('dashboard'));
        }
        $data['title'] = 'Login Admin Tenda';


        return view('depan/logintenda', $data);
    }

    public function actionlogintenda()
    {
        $user = $this->request->getVar('nama_user');
        $pas = $this->request->getVar('pass_user');
        $data = $this->tenda->where('nama_user', $user)->first();
        if ($data) {
            $pass = $data['pass_user'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'nama_user' => $data['nama_user'],
                    'adminwemart' => $data['adminwemart'],
                    'saldo' => $data['saldo'],
                    'sudahlogintenda' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('dashboardtenda'));
            } else {
                session()->setFlashdata('pass', 'password Siswa salah');
                return redirect()->to(base_url('laporankeuangansiswa'));
            }
        } else {
            session()->setFlashdata('user', 'Nama Siswa tidak diketahui');
            return redirect()->to(base_url('laporankeuangansiswa'));
        }
    }

    public function dashboardtenda()
    {
        if ($this->session->sudahlogintenda != 1) {
            return redirect()->to(base_url('tendaadmin'));
        }

        $data['tendaop'] = $this->tendaop->findAll();
        $data['title'] = ' E-Pay';
        $data['hasil'] = null;
        return view('admintenda/admintenda', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('tenda'));
    }
}
