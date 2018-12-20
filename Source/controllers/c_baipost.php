<?php 
include("models/m_baipost.php");
class C_baipost{
    public function hienthi_baipost()
    {
        //Models
        $m_baipost = new M_baipost();
        $posts= $m_baipost->doc_post();
        //Views
        include("views/v_baipost.php");

    }
    public function hienthi_chitiet_baipost()
    {
        //Models
        $m_baipost = new M_baipost();
        $post= $m_baipost->doc_post_id();
        //Views
        include("views/v_baipost.php");

    }
    public function hienthi_tatca_baipost()
    {
        //Models
        $m_baipost = new M_baipost();
        $posts= $m_baipost->doc_tat_ca_post();
        //Views
        include("views/v_danhsachbaipost.php");

    }
}

?>

