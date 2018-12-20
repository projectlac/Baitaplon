<?php
require_once("database.php");?>

<?php
class M_docpost extends database
{

    public function doc_post_id($id)
    {
        $sql="Select * from posts where id=? ";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }

}

?> 