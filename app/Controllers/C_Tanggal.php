<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_historypembayaran;
use App\Models\M_tanggal;
use App\Models\M_keuanganmym;






class C_Tanggal extends BaseController
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
        $this->tanggal = new M_tanggal();
        $this->histori = new M_historypembayaran();
        $this->mym = new M_keuanganmym();
    }
    public function tanggal()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = 'Asrama | ICMBS';
        $data['hasil'] = null;
        return view('admin/tambah-tanggal', $data);
    }

    public function lihat()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }

        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = 'Tanggal Masuk | E-Pay';
        $data['hasil'] = null;
        return view('admin/tanggal', $data);
    }

    public function history($tanggal = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['tanggal'] = $this->tanggal->where('tanggal', $tanggal)->findAll();
        $data['histori'] = $this->histori->findAll();
        $data['title'] = 'Admin Mustamik';
        $data['hasil'] = null;

        return view('admin/historitanggal', $data);
    }

    // orang tua
    public function dashboard()
    {
        if ($this->session->sudahwali != 1) {
            return redirect()->to(base_url('laporankeuangansiswa'));
        }

        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = ' E-Pay';
        $data['hasil'] = null;
        return view('walisiswa/tanggal', $data);
    }

    // admin transfer pribadi
    public function adminku()
    {
        if ($this->session->sudahku != 1) {
            return redirect()->to(base_url('transferku'));
        }

        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = ' E-Pay';
        $data['hasil'] = null;
        return view('transfer/tanggal', $data);
    }



    public function aksidashboard($tanggal = null)
    {
        if ($this->session->sudahwali != 1) {
            return redirect()->to(base_url('laporankeuangansiswa'));
        }
        $data['tanggal'] = $this->tanggal->where('tanggal', $tanggal)->findAll();
        $data['histori'] = $this->histori->findAll();
        $data['title'] = 'Keuangan Siswa';
        $data['hasil'] = null;

        return view('walisiswa/historitanggal', $data);
    }
    // kantin

    public function dashboardmym()
    {
        if ($this->session->sudahwali != 1) {
            return redirect()->to(base_url('laporankeuangansiswa'));
        }

        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = ' E-Pay';
        $data['hasil'] = null;
        return view('walisiswa/tanggalmym', $data);
    }
    public function aksidashboardmym($tanggal = null)
    {
        if ($this->session->sudahwali != 1) {
            return redirect()->to(base_url('laporankeuangansiswa'));
        }
        $data['tanggal'] = $this->tanggal->where('tanggal', $tanggal)->findAll();
        $data['mym'] = $this->mym->findAll();
        $data['title'] = 'Keuangan Siswa';
        $data['hasil'] = null;

        return view('walisiswa/mym', $data);
    }


    public function tanggalmym()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }

        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = 'Tanggal Masuk | E-Pay';
        $data['hasil'] = null;
        return view('admin/tanggalmym', $data);
    }

    public function aksitanggal($tanggal = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['tanggal'] = $this->tanggal->where('tanggal', $tanggal)->findAll();
        $data['mym'] = $this->mym->findAll();
        $data['title'] = 'Admin Mustamik';
        $data['hasil'] = null;

        return view('admin/keuanganmym', $data);
    }


    public function kehadirandiniah()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['absen'] = $this->absen->findAll();

        $data['title'] = 'Kehadiran Diniah';
        $data['hasil'] = null;
        return view('admin/lihat-kehadiran', $data);
    }

    public function tambahkelas()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['kelas'] = $this->kelas->findAll();
        $data['title'] = 'Absen admin Ma"had | ICMBS';
        $data['hasil'] = null;
        return view('form/tambah-kelas', $data);
    }

    public function inputkelas()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $kelas = $this->request->getPost('kelas');
        $this->kelas->insert([
            "kelas" => $kelas,
        ]);
        $data['kelas'] = $this->kelas->findAll();
        $data['title'] = 'tambah Kelas';
        $data['hasil'] = null;

        return view('form/tambah-kelas', $data);
    }

    public function tambahtanggal()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = ' admin Ma"had | ICMBS';
        $data['hasil'] = null;
        return view('form/tambah-tanggal', $data);
    }

    public function inputtanggal()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $tanggal = $this->request->getPost('tanggal');
        $this->tanggal->insert([
            "tanggal" => $tanggal,
        ]);
        $data['tanggal'] = $this->tanggal->findAll();
        $data['title'] = 'Tambah Tanggal';
        $data['hasil'] = null;

        return view('admin/tambah-tanggal', $data);
    }


    // delete
    public function deletek($kelas_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->kelas->delete($kelas_id);

        return redirect()->to(base_url('tambahkelas'));
    }
    public function deletetanggal($tanggal_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->tanggal->delete($tanggal_id);

        return redirect()->to(base_url('tanggal'));
    }
    public function deletea($absensi_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->absen->delete($absensi_id);

        return redirect()->to(base_url('kehadirandiniah'));
    }
}
