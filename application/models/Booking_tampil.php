<?php

class Booking_tampil extends CI_model {
    public function getAllBooking()
    {
        return $this->db->get('booking')->result_array();
    }

    public function addBooking()
    {
        $data = [
            "nama_booking" => $this->input->post('nama', true),
            "jumlah_booking" => $this->input->post('jumlah', true),
            "tanggal_booking" => $this->input->post('date', true),
            "jam_booking" => $this->input->post('time', true),
            "paket_booking" => $this->input->post('paket', true),
        ];
        $this->db->insert('booking', $data);
    }

    public function getBooking($id_booking)
    {
        return $this->db->get_where('booking', ['id_booking' => $id_booking ])->row_array();
    }

    public function editBooking()
    {
        $data = [
            "nama_booking" => $this->input->post('nama', true),
            "jumlah_booking" => $this->input->post('jumlah', true),
            "tanggal_booking" => $this->input->post('date', true),
            "jam_booking" => $this->input->post('time', true),
            "paket_booking" => $this->input->post('paket', true),
        ];

        $this->db->where('id_booking', $this->input->post('id_booking'));
        $this->db->update('booking', $data);
    }

    public function deleteBooking($id_booking)
    {
        $this->db->where('id_booking', $id_booking);
        $this->db->delete('booking');
    }
}