<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Adminkeuangan;
use App\Models\M_Adminwemart;
use App\Models\M_siswa;
use App\Models\M_historypembayaran;


class C_Keuangan extends BaseController
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
        $this->keuangan = new M_Adminwemart();
        $this->siswa = new M_siswa();
        $this->pembayaran = new M_historypembayaran();
    }
    public function home()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        // $data['baground7'] = $this->baground7->first();
        $data['title'] = 'Dashboard E-Pay';

        return view('admin/dashboard', $data);
    }

    // keuangan control_____________________________________________________________
    public function loginortu()
    {
        $data['title'] = 'Keuangan Siswa';
        return view('admin/loginortu', $data);
    }

    // data siswa______________________________________________________
    public function datasiswa()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }

        $data['siswa'] = $this->siswa->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Data Siswa ICMBS';

        return view('admin/tambahsiswa', $data);
    }

    public function inputsiswa()
    {
        $siswa_name = $this->request->getPost('nama_siswa');
        $nis = $this->request->getPost('nis_siswa');
        $pass_siswa = $this->request->getPost('pass_siswa');
        $pin = $this->request->getPost('pin');
        $saldo = $this->request->getPost('saldo');
        $status = $this->request->getPost('status');
        $this->siswa->insert([
            "nama_siswa" =>  $siswa_name,
            "nis_siswa" =>  $nis,
            "pass_siswa" => md5($pass_siswa),
            "pin" =>  $pin .= mt_rand(10000, 99999999),
            "saldo" =>  $saldo,
            "status" =>  $status,
        ]);
        return redirect('datasiswa');
    }

    // UPDATE DATA
    public function updatesiswa($siswa_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['siswa'] = $this->siswa->findAll();
        $data['hasil'] = $this->siswa->where('siswa_id', $siswa_id)->findAll();
        $data['title'] = 'Update Data Siswa';

        return view('admin/tambahsiswa', $data);
    }

    public function updatepass($siswa_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['siswa'] = $this->siswa->findAll();
        $data['hasil'] = $this->siswa->where('siswa_id', $siswa_id)->findAll();
        $data['title'] = 'Update Data Siswa';

        return view('admin/passsiswa', $data);
    }


    // mesin update
    public function actionsiswa($siswa_id = null)
    {
        $siswa_id = $this->request->getPost('siswa_id');
        $siswa_name = $this->request->getPost('nama_siswa');
        $nis = $this->request->getPost('nis_siswa');
        $saldo = $this->request->getPost('saldo');
        $status = $this->request->getPost('status');
        $data['post'] = $this->siswa->update(
            $siswa_id,
            [
                "siswa_id" =>  $siswa_id,
                "nama_siswa" =>  $siswa_name,
                "nis_siswa" =>  $nis,
                "saldo" =>  $saldo,
                "status" =>  $status,
            ]
        );

        return redirect()->to(base_url('datasiswa'));
    }

    public function actionsiswapass($siswa_id = null)
    {
        $siswa_id = $this->request->getPost('siswa_id');
        $pass_siswa = $this->request->getPost('pass_siswa');
        $data['post'] = $this->siswa->update(
            $siswa_id,
            [
                "siswa_id" =>  $siswa_id,
                "pass_siswa" => md5($pass_siswa),
            ]
        );

        return redirect()->to(base_url('datasiswa'));
    }
    public function deletesiswa($siswa_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->siswa->delete($siswa_id);

        return redirect()->to(base_url('datasiswa'));
    }
    // akhir data siswa_____________________________________________________

    // update saldo e-pay___________________________________________________

    // akhir saldo e-pay____________________________________________________

    // tambah user__________________________________________________________

    // histori______________________________________________________________
    public function historii()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }

        $data['histori'] = $this->pembayaran->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Data histori siswa ICMBS';


        return view('admin/history', $data);
    }



    public function useraccount()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }

        $data['siswa'] = $this->siswa->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Data User E-pay & W-Mart';


        return view('admin/tambahuser', $data);
    }

    public function p1()
    {
        $siswa_name = $this->request->getPost('nama_siswa');
        $nis = $this->request->getPost('nis_siswa');
        $pass_siswa = $this->request->getPost('pass_siswa');
        $pin = $this->request->getPost('pin');
        $saldo = $this->request->getPost('saldo');
        $status = $this->request->getPost('status');
        $this->siswa->insert([
            "nama_siswa" =>  $siswa_name,
            "nis_siswa" =>  $nis,
            "pass_siswa" => md5($pass_siswa),
            "pin" =>  $pin .= mt_rand(10000, 99999999),
            "saldo" =>  $saldo,
            "status" =>  $status,
        ]);
        return redirect('datasiswa');
    }

    // UPDATE DATA
    public function e1($siswa_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('loginkeuangan'));
        }
        $data['username'] = $this->siswa->findAll();
        $data['hasil'] = $this->siswa->where('siswa_id', $siswa_id)->findAll();
        $data['title'] = 'Update Data Siswa';

        return view('admin/updatesiswa', $data);
    }

    // mesin update
    public function e3($siswa_id = null)
    {
        $siswa_name = $this->request->getPost('nama_siswa');
        $nis = $this->request->getPost('nis_siswa');
        $pass_siswa = $this->request->getPost('pass_siswa');
        $pin = $this->request->getPost('pin');
        $saldo = $this->request->getPost('saldo');
        $keterangan = $this->request->getPost('keterangan');
        $data['post'] = $this->siswa->update(
            $siswa_id,
            [
                "nama_user" =>  $siswa_name,
                "nis_siswa" =>  $nis,
                "pass_siswa" => md5($pass_siswa),
                "pin" =>  $pin .= mt_rand(10000, 99999999),
                "saldo" =>  $saldo,
                "keterangan" => 'ACTIVE',
            ]
        );

        return redirect()->to(base_url('datasiswa'));
    }
    public function eee4($siswa_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->siswa->delete($siswa_id);

        return redirect()->to(base_url('datasiswa'));
    }


    // mesin blokir
    public function aksiblokir($siswa_id = null)
    {
        $keterangan = $this->request->getPost('keterangan');
        $data['post'] = $this->siswa->update(
            $siswa_id,
            [
                "keterangan" => 'BLOKIR',
            ]
        );

        return redirect()->to(base_url('statusblokir'));
    }

    // mesin activasi
    public function aksiactivasi($siswa_id = null)
    {
        $keterangan = $this->request->getPost('keterangan');
        $data['post'] = $this->siswa->update(
            $siswa_id,
            [
                "keterangan" => 'ACTIVE',
            ]
        );

        return redirect()->to(base_url('statusblokir'));
    }
}
