<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\M_siswa;
use App\Models\M_Keuanganmym;



class Kantin extends BaseController
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
        $this->kantin = new M_Keuanganmym();
        // set model
        // $this->keuangan = new M_Adminkeuangan();
        // $this->wmart = new M_Adminwemart();
    }


    // index controller ________________________________________________
    public function kantin()
    {
        $data['title'] = 'Pembayaran Siswa';

        return view('kantin/nispay', $data);
    }

    public function actionkantin()
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
                return redirect()->to(base_url('passwordkantin'));
            }
        } else {
            session()->setFlashdata('tdk', ' e-pay anda belum terdaftar');
            return redirect()->to(base_url('kantin'));
        }
    }

    //pass controller ____________________________________________________

    public function passwordkantin()
    {
        if ($this->session->sudahindex != 1) {
            return redirect()->to(base_url('kantin'));
        }
        $ket = 'BLOKIR';
        if ($this->session->keterangan == $ket) {
            session()->setFlashdata('pin', 'karena e-pay anda telah diblokir');
            return redirect()->to(base_url('kantin'));
        }
        $data['title'] = 'Password E-pay Siswa';
        return view('kantin/passwordpay', $data);
    }

    public function actionpasskantin()
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
                return redirect()->to(base_url('nominalkantin'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('passwordkantin'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('passwordkantin'));
        }
    }

    // nominal controller
    public function nominalkantin()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url('kantin'));
        }
        $data['title'] = 'Nominal Pembayaran Siswa';
        return view('kantin/pembayaranpay', $data);
    }

    public function actionnominalkantin()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url('kantin'));
        }
        $siswa_id = $this->session->siswa_id;
        $saldoawal = $this->session->saldo;
        $pembayaran = $this->request->getPost('pembayaran');
        $saldoakhir = $saldoawal - $pembayaran;
        $siswa_name = $this->session->nama_siswa;
        $nis = $this->session->nis;
        $pin = $this->session->pin;
        if ($saldoawal < $pembayaran) {
            $data['title'] = 'Saldo Tidak Cukup';
            return view('kantin/kesalahan', $data);
        } else {
            $this->kantin->insert([
                "nama_siswa" =>  $siswa_name,
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
            return redirect('logoutkantin');
        }
    }

    public function saldokantin()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url('kantin'));
        }
        $data['title'] = 'Saldo E-Pay Siswa';
        return view('kantin/saldopay', $data);
    }

    public function thankskantin()
    {
        $data['title'] = 'Pembayaran Tuntas';

        return view('kantin/thanks', $data);
    }

    public function blokir()
    {
        $data['title'] = 'Blokir';

        return view('kantin/blokir', $data);
    }

    public function statusblokir()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }

        $data['siswa'] = $this->siswa->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Data siswa ICMBS';


        return view('admin/blokir', $data);
    }

    public function histori()
    {
        $data['title'] = 'Data Pengeluaran Siswa';
        $data['histori'] = $this->pembayaran->findAll();
        return view('siswa/historypembelian', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('kantin'));
    }
}
