<?php

namespace App\Controllers;

use App\Models\Model_home;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Model_home = new Model_home();

       helper('form');
    }

    public function index()
    {
        if (session()->get('level') <> 2) {
            return redirect()->to(base_url('arsip'));
        }
        $data = array(
            'title' => 'Procurement',
            'isi'   => 'home/v_index'
        );
        return view('layout/v_wrapper',$data);
    }

    public function add()
    {
        if (session()->get('level') <> 2) {
            return redirect()->to(base_url('arsip'));
        }
        if ($this->validate([
            'no_po_memo' => [
                'label'  => 'No PO/Memo',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],
            
             'no_pr' => [
                'label'  => 'No Purchase Request',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],

            'ket_pembelian' => [
                'label'  => 'Keterangan Pembelian',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ], 
              
            'tgl_invoice' => [
                'label'  => 'Tanggal Invoice',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],

            'nama_vendor' => [
                'label'  => 'Nama Vendor',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],

            'nama_pengirim' => [
                'label'  => 'Nama Pengirim',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],  
                
            'nama_penerima' => [
                'label'  => 'Nama Penerima',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],   

            'tgl_kirim' => [
                'label'  => 'Tanggal Kirim',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!' ,    
                ]
                ],
                
            // 'file_arsip' => [
            //     'label'  => 'File Arsip',
            //     'rules'  => 'uploaded[file_arsip]|ext_in[file_arsip,pdf]',
            //     'errors' => [
            //         'uploaded' => '{field} Wajib Diisi!' ,  
            //         'ext_in' => 'Format {field} Wajib .pdf!' ,  
            //     ]
            // ],
        ])) {
            //mengambil file arsip yang akan di upload di form
            // $file_arsip = $this->request->getFile('file_arsip');
            //merandom nama file arsip
            // $nama_file = $file_arsip->getRandomName();
            //jika valid
            $data = array(
                'no_po_memo' => $this->request->getPost('no_po_memo'), 
                'no_pr' => $this->request->getPost('no_pr'),            
                'ket_pembelian' =>  $this->request->getPost('ket_pembelian'),
                'tgl_invoice' => date('Y-m-d'),
                'nama_vendor' => $this->request->getPost('nama_vendor'),
                'nama_pengirim' => $this->request->getPost('nama_pengirim'),
                'nama_penerima' => $this->request->getPost('nama_penerima'),
                'tgl_kirim' => date('Y-m-d'),
                // 'file_arsip' => $nama_file,
            );
            // $file_arsip->move('file_arsip', $nama_file); // direktori upload file 
            $this->Model_home->add($data);
            session()->setFlashdata('pesan','Dokumen berhasil dikirim!');
            return redirect()->to(base_url('home/history'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('home/index'));
        }
    }

    public function history()
    {
        if (session()->get('level') <> 2) {
            return redirect()->to(base_url('arsip'));
        }

        $data = array(
            'title' => 'Procurement',
            'home' => $this->Model_home->all_data(),
            'isi'   => 'home/v_history'
        );
        return view('layout/v_wrapper',$data);
    }
}