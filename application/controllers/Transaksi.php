<?php
class Transaksi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Transaksi');
        $this->load->library('pdf');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Transaksi";
        $data['transaksi'] = $this->M_Transaksi->data_transaksi();
        $this->template->load_admin('index','transaksi',$data);

    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $data['title'] = "Data Transaksi";
        $data['subtitle'] = "Tambah Data Transaksi";
        $this->template->load_admin('index','transaksi_tambah',$data);

        
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $this->M_Transaksi->simpan();
        redirect('transaksi');
    }

    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Transaksi";
        $data['subtitle'] = "Edit Data Transaksi";

        $id = $this->uri->segment(3);
        $data['transaksi'] = $this->M_Transaksi->data_transaksi_by_id($id);
        $this->template->load_admin('index','transaksi_ubah',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Transaksi->update();
        redirect('transaksi');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Transaksi->hapus_data_transaksi($id);
        redirect('transaksi');
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
        $pdf->Cell(190,7,'DATA TRANSAKSI PEMBAYARAN',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,8,'NAMA SISWA',1,0);
        $pdf->Cell(45,8,'KELAS',1,0);
        $pdf->Cell(30,8,'TGL BAYAR',1,0);
        $pdf->Cell(30,8,'BULAN BAYAR',1,0);
        $pdf->Cell(35,8,'TAHUN BAYAR',1,0);
        $pdf->Cell(35,8,'JUMLAH BAYAR',1,1);
        $pdf->SetFont('Arial','',8);
        $transaksi = $this->db->get('transaksi')->result();
        foreach ($transaksi as $row){
            $pdf->Cell(30,8,$row->nama_siswa,1,0);
            $pdf->Cell(45,8,$row->kelas,1,0);
            $pdf->Cell(30,8,$row->tgl_bayar,1,0);
            $pdf->Cell(30,8,$row->bulan_dibayar,1,0);
            $pdf->Cell(35,8,$row->tahun_dibayar,1,0);
            $pdf->Cell(35,8,$row->jumlah_bayar,1,1);

        }
        $pdf->Output();
    }
}