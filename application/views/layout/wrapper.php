
<?php //require_once('header.php') 

// if (($this->uri->segment(1) != 'home') || $this->uri->segment(1) == '') {
//     $this->load->view('layout/x_head');
//     $this->load->view('layout/header');
//     echo '<main id="wt-main" class="wt-main wt-haslayout">';
//     if ($this->session->userdata('role') == "Tentor") {
//         $this->load->view('layout/t_nav');
//     } else if ($this->session->userdata('role') == "Siswa") {
//         $this->load->view('layout/s_nav');
//     } else {
//         $this->load->view('layout/nav');
//     }
//     $this->load->view('layout/content');
//     echo '</main>';
//     $this->load->view('layout/x_footer');
// } else if ($this->uri->segment(1) == 'home') {
//     $this->load->view('layout/head');
//     $this->load->view('layout/header');
//     if ($this->uri->segment(2) != 'register') {
//         $this->load->view('layout/banner');
//     }
//     echo '<main id="wt-main" class="wt-main wt-haslayout">';
//     $this->load->view('layout/content');

//     $this->load->view('layout/footer');
// }


if (($this->uri->segment(1) == 'home') || $this->uri->segment(1) == '') {
    $this->load->view('layout/head');
    $this->load->view('layout/header');
    if (!$this->uri->segment(2)) {
        $this->load->view('layout/banner');
    }
    echo '<main id="wt-main" class="wt-main wt-haslayout">';
    $this->load->view('layout/content');

    $this->load->view('layout/footer');
} else {
    $this->load->view('layout/x_head');
    $this->load->view('layout/header');
    echo '<main id="wt-main" class="wt-main wt-haslayout">';
    if ($this->session->userdata('role') == "Tentor") {
        $this->load->view('layout/t_nav');
    } else if ($this->session->userdata('role') == "Siswa") {
        $this->load->view('layout/s_nav');
    } else {
        $this->load->view('layout/nav');
    }
    $this->load->view('layout/content');
    echo '</main>';
    $this->load->view('layout/x_footer');
}
