<?php 
include("models/m_thucthan.php");
class C_thucthan{
    public function hienthi_thucthan()
    {
        //Models
        $m_thucthan = new M_thucthan();
        $thucthans= $m_thucthan->doc_thuc_than();
        //Views
        include("views/v_thucthan.php");
    }
    public function hienthi_chitiet_thucthan()
    {
        //Models
        $id=$_GET["id"];
        $m_thucthan = new M_thucthan();
        $thucthan= $m_thucthan->doc_thuc_than_id($id);
        //Views
        include("views/v_chitietthucthan.php");
    }
}

?>