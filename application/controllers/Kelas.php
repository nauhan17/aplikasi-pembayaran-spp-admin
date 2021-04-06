<?php
class Kelas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Kelas');
        $this->load->library('pdf');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kelas";
        $data['kelas'] = $this->M_Kelas->data_kelas();
        $this->template->load_admin('index','kelas',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $data['title'] = "Data Kelas";
        $data['subtitle'] = "Tambah Data Kelas";
        $this->template->load_admin('index','kelas_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $this->M_Kelas->simpan();
        redirect('kelas');
    }

    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kelas";
        $data['subtitle'] = "Edit Data Kelas";

        $id = $this->uri->segment(3);
        $data['kelas'] = $this->M_Kelas->data_kelas_by_id($id);
        $this->template->load_admin('index','kelas_ubah',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Kelas->update();
        redirect('kelas');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Kelas->hapus_data_kelas($id);
        redirect('kelas');
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
        $pdf->Cell(190,7,'DAFTAR NAMA KELAS',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'ID KELAS',1,0);
        $pdf->Cell(28,6,'NAMA KELAS',1,0);
        $pdf->Cell(85,6,'KOMPETENSI KEAHLIAN',1,1);
        $pdf->SetFont('Arial','',10);
        $kelas = $this->db->get('kelas')->result();
        foreach ($kelas as $row){
            $pdf->Cell(30,6,$row->id_kelas,1,0);
            $pdf->Cell(28,6,$row->nama_kelas,1,0);
            $pdf->Cell(85,6,$row->kompetensi_keahlian,1,1);
        }
        $pdf->Output();
    }

}