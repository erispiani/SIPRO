<?php
class My_Controller extends CI_Controller
{
    public function HalamanAdmin($content, $data = null)
    {
        $this->load->model('M_Administrator');
        $data['count'] = $this->M_Administrator->hitungnotif();
        $data['notpay'] = $this->M_Administrator->notifpayment();
        $data['notif'] = $this->db->get_where('notif', ['status' => 0])->result();
        // $data['notif'] = $this->db->get_where('payment', ['status' => 0])->result();

        $hal['header'] = $this->load->view('template/administrator/header', $data, TRUE);
        $hal['content'] = $this->load->view($content, $data, TRUE);
        $hal['footer'] = $this->load->view('template/administrator/footer', $data, TRUE);

        $this->load->view('index', $hal, $data);
    }
    public function HalamanHome($konten, $data = null)
    {
        error_reporting(0);

        $id = $this->session->userdata('id_user');
        if ($id != "") {
            $data['cart'] = $this->M_Home->hitungcart();
            $oop = $this->M_Home->getidall('booking', 'user', $id);
            foreach ($oop as $t) :
                $get = $t->id;
                $data['bookcart'] = $this->M_Home->getcart($get)->result();
            endforeach;
        }
        $hal['header'] = $this->load->view('template/nav-front/header', $data, TRUE);
        $hal['content'] = $this->load->view($konten, $data, TRUE);
        $hal['footer'] = $this->load->view('template/nav-front/footer', $data, TRUE);

        $this->load->view('index', $hal, $data);
    }
    public function Halamanprofil($konten, $data = null)
    {
        error_reporting(0);
        $id = $this->session->userdata('id_user');
        if ($id != "") {
            $data['cart'] = $this->M_Home->hitungcart();
            $oop = $this->M_Home->getidall('booking', 'user', $id);
            foreach ($oop as $t) :
                $get = $t->id;
                $data['bookcart'] = $this->M_Home->getcart($get)->result();
            endforeach;
        }
        $hal['header'] = $this->load->view('template/nav-front/header', $data, TRUE);
        $hal['sidebar'] = $this->load->view('template/nav-front/sidebar', $data, TRUE);
        $hal['content'] = $this->load->view($konten, $data, TRUE);
        $hal['foot'] = '</div></div>';
        $hal['footer'] = $this->load->view('template/nav-front/footer', $data, TRUE);

        $this->load->view('index', $hal, $data);
    }
    // public function detail($content, $data = null)
    // {
    //     $hal['content'] = $this->load->view($content, $data, TRUE);

    //     $this->load->view('index', $hal, $data);
    // }
}
