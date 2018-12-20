<?php 
include("models/m_chitietbaipost.php");
class C_chitietpost{

    public function hienthi_chitiet_baipost()
    {
        //Models
        $id=$_GET["id"];
        $m_baipost = new M_docpost();
        $post= $m_baipost->doc_post_id($id);
        //Views
        include("views/v_chitietbaipost.php");

    }
 
}

?>
