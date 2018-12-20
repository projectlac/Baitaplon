<?php 
include("models/m_vukhi.php");
class C_vukhi{
    public function hienthi_vukhi()
    {
        //Models
        $m_vukhi = new M_Vukhi();
        $a= $m_vukhi->doc_vukhi();
        //Views
        include("views/v_vukhi.php");
    }
    public function hienthi_vukhiC()
    {
        //Models
        $m_vukhi = new M_Vukhi();
        $c= $m_vukhi->doc_vukhiC();
        //Views
        include("views/v_vukhiC.php");
    }
    public function hienthi_vukhiP()
    {
        //Models
        $m_vukhi = new M_Vukhi();
        $p= $m_vukhi->doc_vukhiP();
        //Views
        include("views/v_vukhiP.php");
    }
    public function hienthi_vukhiD()
    {
        //Models
        $m_vukhi = new M_Vukhi();
        $d= $m_vukhi->doc_vukhiD();
        //Views
        include("views/v_vukhiD.php");
    }
}

?>