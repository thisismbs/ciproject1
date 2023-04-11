<?php

namespace App\Controllers;

use App\Models\Model_arsip;

class Arsip extends BaseController
{
    public function __construct()
    {
        $this->Model_arsip = new Model_arsip();
        
        helper('form');
    }
    public function index()
    {
        if (session()->get('level') <> 1) {
            return redirect()->to(base_url('home'));
        }
        $data = array(
            'title' => 'Finance',
            'arsip' => $this->Model_arsip->all_data(),
            'isi'   => 'arsip/v_index'
        );
        return view('layout/v_wrapper',$data);
    }

    public function edit($id_dok_user)
    {
        if (session()->get('level') <> 1) {
            return redirect()->to(base_url('home'));
        }
        $data = array(
            'title' => 'Finance',
            'arsip' => $this->Model_arsip->detail_data($id_dok_user),
            'isi'   => 'arsip/v_edit'
        );
        return view('layout/v_wrapper',$data);
    }

    public function update($id_dok_user)
    {      
        if (session()->get('level') <> 1) {
            return redirect()->to(base_url('home'));
        }      
            $data = array(
                'id_dok_user' => $id_dok_user,
                'status' => $this->request->getPost('status'),
                'keterangan' => $this->request->getPost('keterangan'),
                'tgl_cek' => date('Y-m-d'),  
            );
           
            $this->Model_arsip->edit($data);
            session()->setFlashdata('pesan','Dokumen berhasil di Update!');
            return redirect()->to(base_url('arsip/index'));
    }

    public function delete($id_dok_user)
    {
        if (session()->get('level') <> 1) {
            return redirect()->to(base_url('home'));
        }
        $data = array(
            'id_dok_user' => $id_dok_user,
    );
        $this->Model_arsip->delete_data($data);
        session()->setFlashdata('pesan','Dokumen berhasil di hapus!');
        return redirect()->to(base_url('arsip/index'));
    }

    public function viewpdf($id_dok_user)
    {
        $data = array(
            'title' => 'View Dokumen',
            'arsip' => $this->Model_arsip->detail_data($id_dok_user),
            'isi'   => 'arsip/v_viewpdf'
        );
        return view('layout/v_wrapper',$data);
    }
}

