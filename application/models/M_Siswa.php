<?php
class M_Siswa extends CI_Model {
    function data_siswa(){
        $query = $this->db->query("select * from siswa");
        return $query;
    }

    function simpan(){
        $data = array('nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'));
        $insert = $this->db->insert('siswa',$data);
    }

    function data_siswa_by_id($id){
        $query = $this->db->query("select * from siswa where nisn = '$id'");
        return $query;
    }

    function get_layanan()
    {
        $query = $this->db->query("select * from siswa");
        return $this->db->query($query)->result();
    }

    function update(){
        $where = array('nis' => $this->input->post('nis'));
        $data1 = array('nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'));

        $data2 = array('no_telp' => $this->input->post('no_telp'));

        if(empty($this->input->post('nama'))) {
            $this->db->where($where);
            $query = $this->db->update('siswa',$data2);
        } else {
            $this->db->where($where);
            $query = $this->db->update('siswa',$data1);
        }

        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Siswa Berhasil Diperbaharui');
        }
    }

    function hapus_data_siswa($id){
        $query = $this->db->query("delete from siswa where nisn = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Siswa Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('gagalsimpan','Data Siswa Gagal Dihapus');
        }
    }
}