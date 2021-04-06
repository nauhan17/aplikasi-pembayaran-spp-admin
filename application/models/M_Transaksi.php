<?php
class M_Transaksi extends CI_Model {
    function data_transaksi(){
        $query = $this->db->query("select * from transaksi");
        return $query;
    }

    function simpan(){
        $data = array('nama_siswa' => $this->input->post('nama_siswa'),
                'kelas' => $this->input->post('kelas'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                'bulan_dibayar' => $this->input->post('bulan_dibayar'),
                'tahun_dibayar' => $this->input->post('tahun_dibayar'),
                'jumlah_bayar' => $this->input->post('jumlah_bayar'));
        $insert = $this->db->insert('transaksi',$data);
    }

    function data_transaksi_by_id($id){
        $query = $this->db->query("select * from transaksi where id_pembayaran = '$id'");
        return $query;
    }

    function update(){
        $where = array('id_pembayaran' => $this->input->post('id_pembayaran'));
        $data1 = array('nama_siswa' => $this->input->post('nama_siswa'),
                'kelas' => $this->input->post('kelas'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                'bulan_dibayar' => $this->input->post('bulan_dibayar'),
                'tahun_dibayar' => $this->input->post('tahun_dibayar'),
                'jumlah_bayar' => $this->input->post('jumlah_bayar'));

        $data2 = array('nama_siswa' => $this->input->post('nama_siswa'));

        if(empty($this->input->post('nama_siswa'))) {
            $this->db->where($where);
            $query = $this->db->update('transaksi',$data2);
        } else {
            $this->db->where($where);
            $query = $this->db->update('transaksi',$data1);
        }

        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Transaksi Berhasil Diperbaharui');
        }
    }

    function hapus_data_transaksi($id){
        $query = $this->db->query("delete from transaksi where id_pembayaran = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Transaksi Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('gagalsimpan','Data Transaksi Gagal Dihapus');
        }
    }
}