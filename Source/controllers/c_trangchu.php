<?php 
include("models/m_trangchu.php");
class C_tintuc{
    public function hienthi_tintuc()
    {
        //Models
        $m_tintuc = new M_tintuc();
        $tt= $m_tintuc->doc_tintuc();
        //Views
        include("views/v_trangchu.php");
    }
    public function hienthi_chitiet_tintuc()
    {
        //Models
        $id=$_GET["id"];
        $m_tintuc = new M_tintuc();
        $ttid= $m_tintuc->doc_tintuc_id($id);
        //Views
        include("views/v_chitiettrangchu.php");
    }
        public function hienthi_tintuc_ngan()
    {
        //Models
        $m_tintuc = new M_tintuc();
        $tt= $m_tintuc->doc_tintuc_moi();
        //Views
        include("views/v_tinmoi.php");
    }
}

?>