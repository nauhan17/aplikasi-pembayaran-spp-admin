<?php
class Petugas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Petugas');
        $this->load->library('pdf');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['petugas'] = $this->M_Petugas->data_petugas();
        $this->template->load_admin('index','petugas',$data);

        
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('is_login');
        redirect('login');
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['subtitle'] = "Tambah Data Petugas";
        $this->template->load_admin('index','petugas_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $this->M_Petugas->simpan();
        redirect('petugas');
    }

    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['subtitle'] = "Edit Data Petugas";

        $id = $this->uri->segment(3);
        $data['petugas'] = $this->M_Petugas->data_petugas_by_id($id);
        $this->template->load_admin('index','petugas_ubah',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Petugas->update();
        redirect('petugas');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Petugas->hapus_data_petugas($id);
        redirect('petugas');
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
        $pdf->Cell(190,7,'DAFTAR NAMA PETUGAS',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'ID PETUGAS',1,0);
        $pdf->Cell(28,6,'USERNAME',1,0);
        $pdf->Cell(85,6,'PASSWORD',1,0);
        $pdf->Cell(50,6,'NAMA PETUGAS',1,1);
        $pdf->SetFont('Arial','',10);
        $petugas = $this->db->get('petugas')->result();
        foreach ($petugas as $row){
            $pdf->Cell(30,6,$row->id_petugas,1,0);
            $pdf->Cell(28,6,$row->username,1,0);
            $pdf->Cell(85,6,$row->password,1,0);
            $pdf->Cell(50,6,$row->nama_petugas,1,1); 
        }
        $pdf->Output();
    }

}