<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\M_Adminkeuangan;
use App\Models\M_Adminwemart;
use App\Models\M_siswa;
use App\Models\M_transfer;
use App\Models\M_tanggal;





class C_Transfer extends BaseController
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
        $this->tf = new M_transfer();
        $this->tanggal = new M_tanggal();
    }



    // admin slide
    public function lihat()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeungan'));
        }

        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = 'Tanggal Masuk | E-Pay';
        $data['hasil'] = null;
        return view('admin/tanggaltransfer', $data);
    }

    public function history()
    {
        if ($this->session->sudahku != 1) {
            return redirect()->to(base_url('transferku'));
        }
        $data['histori'] = $this->tf->findAll();
        $data['title'] = 'transfer Kepada Ku';
        $data['hasil'] = null;

        return view('admin/historitransfer', $data);
    }

    public function historyadmin($tanggal = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['tanggal'] = $this->tanggal->where('tanggal', $tanggal)->findAll();
        $data['histori'] = $this->tf->findAll();
        $data['title'] = 'Admin Mustamik';
        $data['hasil'] = null;

        return view('admin/historitransferadmin', $data);
    }

    // Transfer
    public function transfer()
    {
        if ($this->session->sudahwali == 1) {
            return redirect()->to(base_url('masuktransfer'));
        }
        $data['title'] = 'Transfer';


        return view('transfer/transfer', $data);
    }

    public function actiontransfer()
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
                    'nama_siswa' => $data['nama_siswa'],
                    'keterangan' => $data['keterangan'],
                    'nis' => $data['nis_siswa'],
                    'pin' => $data['pin'],
                    'saldo' => $data['saldo'],
                    'sudahtransfer' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('masuktransfer'));
            } else {
                session()->setFlashdata('pass', 'password Siswa salah');
                return redirect()->to(base_url('transfer'));
            }
        } else {
            session()->setFlashdata('user', 'Nama Siswa tidak diketahui');
            return redirect()->to(base_url('transfer'));
        }
    }



    public function masuktransfer()
    {
        $ket = 'BLOKIR';
        if ($this->session->keterangan == $ket) {
            session()->setFlashdata('pin', 'karena e-pay anda telah diblokir');
            return redirect()->to(base_url('transfer'));
        }
        if ($this->session->sudahtransfer != 1) {
            return redirect()->to(base_url('transfer'));
        }
        if ($this->session->saldo == 0) {
            return redirect()->to(base_url('transfer'));
        }
        $data['title'] = 'Masukan Rekening';

        return view('transfer/rekening', $data);
    }

    public function rekening()
    {
        if ($this->session->sudahtransfer != 1) {
            return redirect()->to(base_url('transfer'));
        }
        $niss = $this->request->getPost('nis_siswa');
        $nis = $this->session->nis;
        if ($this->session->nis == $niss) {
            return redirect()->to(base_url('transfer'));
        }
        $siswa_id = $this->session->siswa_id;
        $saldoawal = $this->session->saldo;
        $pembayaran = $this->request->getPost('rekening');
        if ($pembayaran == 0) {
            $data['title'] = 'Saldo Tidak Cukup';
            return view('depan/kesalahan', $data);
        }
        $saldoakhir = $saldoawal - $pembayaran;
        $siswa_name = $this->session->nama_siswa;
        $pin = $this->session->pin;
        if ($saldoawal < $pembayaran) {
            $data['title'] = 'Saldo Tidak Cukup';
            return view('depan/kesalahan', $data);
        } else {
            $this->tf->insert([
                "nama_siswa" =>  $siswa_name,
                "saldo" =>  $pembayaran,
                "nis_siswa" =>  $niss,
                "pin" =>  $pin,
            ]);
            $data['post'] = $this->siswa->update(
                $siswa_id,
                [
                    "saldo" =>  $saldoakhir,
                ]
            );
            return redirect('logouttransfer');
        };
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

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('transfer'));
    }
}
