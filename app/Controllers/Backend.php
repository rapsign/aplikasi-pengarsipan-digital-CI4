<?php

namespace App\Controllers;

use App\Models\BackendModel;

class Backend extends BaseController
{
    public function __construct()
    {
        $this->BackendModel = new BackendModel();
    }
    public function index()
    {
        $data['title'] = 'APLIKASI PENGARSIPAN DIGITAL';
        $data['total_data'] = $this->BackendModel->hitungJumlahData();
        return view('backend/index', $data);
    }

    public function kp()
    {
        session();
        $skkp = $this->BackendModel->findAll();
        $data = [
            'title' => 'APLIKASI PENGARSIPAN DIGITAL | SKKP',
            'validation' => \Config\Services::validation(),
            'p' => $skkp
        ];
        return view('backend/surat-keputusan-kerja-praktik', $data);
    }
    public function view($id)
    {
        session();
        $skkp = $this->BackendModel->findAll();
        $data = [
            'title' => 'Surat Keputusan Kerja Praktik',
            'validation' => \Config\Services::validation(),
            'p' => $skkp
        ];
        return view('backend/view', $data);
    }
    public function download($id)
    {
        $dataFile = $this->BackendModel->find($id);
        return $this->response->download('file/' . $dataFile->berkas, NULL);
    }
}
