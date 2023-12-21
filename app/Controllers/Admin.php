<?php

namespace App\Controllers;

use App\Models\BackendModel;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->bModel = new BackendModel();
    }
    public function save()
    {
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $this->request->getVar('nama_file') . '.' . $dataBerkas->getExtension();

        $dataBerkas->move('file/', $fileName);
        $this->bModel->save([
            'nama_file' => $this->request->getVar('nama_file'),
            'tahun' => $this->request->getVar('tahun'),
            'berkas' => $fileName
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil di Simpan');
        return redirect()->to('backend');
    }
    public function delete($id)
    {
        $dataFile = $this->bModel->find($id);
        unlink('file/' . $dataFile->berkas);
        $this->bModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil di Hapus');
        return redirect()->to('backend');
    }
}
