<?php
require_once("database.php");?>

<?php
class M_thucthan extends database
{
    public function doc_thuc_than()
    {
        $sql="Select * from thucthan";
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