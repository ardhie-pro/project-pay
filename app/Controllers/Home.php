<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\M_siswa;
use App\Models\M_historypembayaran;


class Home extends BaseController
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
        // set model
        // $this->keuangan = new M_Adminkeuangan();
        // $this->wmart = new M_Adminwemart();
    }


    // index controller ________________________________________________
    public function p()
    {
        $data['title'] = 'Pembayaran Siswa';

        return view('depan/nispay', $data);
    }


    public function index2()
    {
        $data['title'] = 'E-pay Sekolahicm 2';

        return view('depan/nispay', $data);
    }

    public function index()
    {
        $data['title'] = 'E-pay Sekolahicm';

        return view('depan/second', $data);
    }

    public function actionindex()
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
                return redirect()->to(base_url('password'));
            }
        } else {
            session()->setFlashdata('tdk', ' e-pay anda belum terdaftar');
            return redirect()->to(base_url('wemart'));
        }
    }

    //pass controller ____________________________________________________

    public function password()
    {
        if ($this->session->sudahindex != 1) {
            return redirect()->to(base_url(''));
        }
        $ket = 'BLOKIR';
        if ($this->session->keterangan == $ket) {
            session()->setFlashdata('pin', 'karena e-pay anda telah diblokir');
            return redirect()->to(base_url('wemart'));
        }
        $data['title'] = 'Password E-pay Siswa';
        return view('depan/passwordpay', $data);
    }

    public function actionpass()
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
                return redirect()->to(base_url('nominal'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('password'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('password'));
        }
    }

    // nominal controller
    public function nominal()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url('wemart'));
        }
        if ($this->session->saldo == 0) {
            return redirect()->to(base_url('wemart'));
        }
        $data['title'] = 'Nominal Pembayaran Siswa';
        return view('depan/pembayaranpay', $data);
    }

    public function actionnominal()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url('wemart'));
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
            return view('depan/kesalahan', $data);
        } else {
            $this->pembayaran->insert([
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
            return redirect('logoutwm');
        }
    }

    public function saldo()
    {
        if ($this->session->sudahpass != 1) {
            return redirect()->to(base_url(''));
        }
        $data['title'] = 'Saldo E-Pay Siswa';
        return view('depan/saldopay', $data);
    }

    public function thanks()
    {
        $data['title'] = 'Pembayaran Tuntas';

        return view('depan/thanks', $data);
    }

    public function blokir()
    {
        $data['title'] = 'Blokir';

        return view('depan/blokir', $data);
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
}
