<?php
require_once("database.php");?>

<?php
class M_thucthan extends database
{
    public function doc_thuc_than()

    { 
        if(isset($_GET['trang'])){
            $demm=$_GET['trang'];
        }
        else
        {
            $demm=0;

        }

        $tr=6;
        $sql="Select * from thucthan order by id desc limit $demm,$tr";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function doc_thuc_than_id($id)
    {
        $sql="Select * from thucthan where id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }

}

?> 