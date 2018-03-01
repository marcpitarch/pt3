<?php

class general extends conexio{
    var $conn;
    
    function general($ruta="../../"){
            parent::connexio($ruta);
    }
    
    function llistat_autors(){
        $sql="SELECT AUT_IDAUTOR";
        $rs=$this->DB_Select($sql);
        $i=1;
        while ($rs_f= $this->DB_Fetch($rs)){
            $aut=new autor();
            $aut=inicialitza($rs_f['AUT_IDAUTOR']);
            $items[$i]=serialize($aut);
            $i=$i+1;
        }
        return $items;
    }
    
    
    
    
    
}


?>
