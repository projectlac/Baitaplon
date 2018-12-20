<?php
require_once("database.php");?>

<?php
class M_tintuc extends database
{
    public function doc_tintuc()
    {
        $sql="Select * from trangchu";
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

}

?> 