<?php
class Siswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa');
        $this->load->library('pdf');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['siswa'] = $this->M_Siswa->data_siswa();
        $this->template->load_admin('index','siswa',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['subtitle'] = "Tambah Data Siswa";
        $this->template->load_admin('index','siswa_tambah',$data);

    }

    

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $this->M_Siswa->simpan();
        redirect('siswa');
    }

    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['subtitle'] = "Edit Data Siswa";

        $id = $this->uri->segment(3);
        $data['siswa'] = $this->M_Siswa->data_siswa_by_id($id);
        $this->template->load_admin('index','siswa_ubah',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Siswa->update();
        redirect('siswa');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Siswa->hapus_data_siswa($id);
        redirect('siswa');
    }

    public function export(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'ADMIN SPP BY NAUFAL',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR NAMA SISWA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(15,8,'NIS',1,0);
        $pdf->Cell(30,8,'NAMA',1,0);
        $pdf->Cell(45,8,'KELAS',1,0);
        $pdf->Cell(30,8,'ALAMAT',1,0);
        $pdf->Cell(25,8,'NO TELP',1,1);
        $pdf->SetFont('Arial','',8);
        $siswa = $this->db->get('siswa')->result();
        foreach ($siswa as $row){
            $pdf->Cell(15,8,$row->nis,1,0);
            $pdf->Cell(30,8,$row->nama,1,0);
            $pdf->Cell(45,8,$row->kelas,1,0);
            $pdf->Cell(30,8,$row->alamat,1,0);
            $pdf->Cell(25,8,$row->no_telp,1,1);

        }
        $pdf->Output();
    }
    
}