<?php
require_once("database.php");?>

<?php
class M_tintuc extends database
{
    public function doc_tintuc()

    { 
        if(isset($_GET['trang'])){
            $demm=$_GET['trang'];
        }
        else
        {
            $demm=0;

        }

        $hienthi=3;
        $sql="Select * from trangchu order by id desc limit $demm,$hienthi";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function doc_tintuc_id($id)
    {
        $sql="Select * from trangchu where id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
     public function doc_tintuc_moi()

   {


        $sql="Select * from trangchu order by id desc limit 2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}

?> 