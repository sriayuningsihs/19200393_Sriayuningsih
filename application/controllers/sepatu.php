<html>

<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

</html>
<?php
class sepatu extends CI_Controller
{
    public function index()
    {

        $this->load->view('form-sepatu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'nama sepatu harus diisi',
                'min_lenght' => 'nama terlalu pendek'
            ]
        );



        $this->form_validation->set_rules(
            'nohp',
            'nohp',
            'required|min_length[11]',
            [
                'required' => 'nohp Matakuliah Harus diisi',
                'min_lenght' => 'nohp terlalu pendek'
            ]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('form-sepatu');
            if (empty($_POST['nama'])) {
                echo "<span class=\"error\">Isi Namanya Dulu Cuy";
            } elseif (empty($_POST['nohp'])) {
                echo "<span class=\"error\">Isi Nomor Handphone bro";
            }
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga')
            ];

            if ($this->input->post('merk') == 'Nike') {
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == 'Adidas') {
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == 'Kickers') {
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == 'Eiger') {
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == 'Bucherri') {
                $data['harga'] = 400000;
            }

            $this->load->view('data-sepatu', $data);
        }
    }
}
