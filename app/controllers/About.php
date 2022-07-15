<?php
class About extends Controller
{
    public function index($nama = 'Yusuf', $pekerjaan = 'programmer', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
        // echo 'Halo nama saya ' . $nama . ' dan saya adalah seorang ' . $pekerjaan;
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/pages');
        $this->view('templates/footer');
    }
}
