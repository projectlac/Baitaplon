<?php
require_once("database.php");?>

<?php
class M_baipost extends database
{
    public function doc_post()
    {
        $sql="Select * from posts where is_public = 1 order by createdate desc limit 6";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function doc_post_id($id)
    {
        $sql="Select * from posts where id=? ";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
    public function doc_tat_ca_post()
    {
        $sql="Select * from posts" ;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}

?> 