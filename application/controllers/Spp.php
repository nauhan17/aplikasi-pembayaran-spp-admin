<?php
class Spp extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Spp');
        $this->load->library('pdf');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data SPP";
        $data['spp'] = $this->M_Spp->data_spp();
        $this->template->load_admin('index','spp',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $data['title'] = "Data SPP";
        $data['subtitle'] = "Tambah Data SPP";
        $this->template->load_admin('index','spp_tambah',$data);

    }

    

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $this->M_Spp->simpan();
        redirect('spp');
    }

    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Spp";
        $data['subtitle'] = "Edit Data Spp";

        $id = $this->uri->segment(3);
        $data['spp'] = $this->M_Spp->data_spp_by_id($id);
        $this->template->load_admin('index','spp_ubah',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Spp->update();
        redirect('spp');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Spp->hapus_data_spp($id);
        redirect('spp');
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
        $pdf->Cell(190,7,'DAFTAR DATA SPP',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(15,8,'NOMINAL',1,0);
        $pdf->Cell(15,8,'TAHUN',1,1);
        $pdf->SetFont('Arial','',8);
        $spp = $this->db->get('spp')->result();
        foreach ($spp as $row){
            $pdf->Cell(15,8,$row->nominal,1,0);
            $pdf->Cell(15,8,$row->tahun,1,1);

        }
        $pdf->Output();
    }
    
}