<?php
require_once("database.php");?>

<?php
class M_Vukhi extends database
{
    public function doc_vukhiC()
    {
        $sql="Select * from vukhi where loai='C'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function doc_vukhiP()
    {
        $sql="Select * from vukhi where loai='P'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function doc_vukhiD()
    {
        $sql="Select * from vukhi where loai='D'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

?> 