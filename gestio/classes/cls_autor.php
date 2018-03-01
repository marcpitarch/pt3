<?php
class autor extends connexio{
	
		// Atributs
		var $aut_idautor;
		var $aut_autor;
			
		// funcio creadora
		function autor($ruta="../../") {
			parent::connexio($ruta); //crea instancia de la classe pare  per tenir tots els métodes per herència
		}
		
		// funcio d'inicialitzacio 		
		function inicialitza($id){
			$this->aut_idautor=$id;			
			if ($this->aut_idautor==0) {//si és 0 vol dir que es crea una nova instància i per tant cal inicialitzar els atributs	
				$this->aut_autor="";
			}
			else {
				// sino és 0 vol dir que volem consultar un element que ja tenim en la bd
				$sql="SELECT AUTORS.AUT_IDAUTOR, AUTORS.AUT_AUTOR ".
					"FROM AUTORS WHERE (((AUTORS.AUT_IDAUTOR)=".$id."))";
				$rs=$this->DB_Select($sql);
				$rs=$this->DB_Fetch($rs);
				$this->aut_autor=$rs['AUT_AUTOR'];
			}
		}
	
		// funcio de carrega de valors
		function carregaValors($id,$autor){	
				$this->set_aut_idautor($id);
				$this->set_aut_autor($autor);
		}			
		
		
		// funcions d'acces als atributs
		// GET's
		function get_aut_idautor(){return $this->aut_idautor;}
		function get_aut_autor(){return $this->aut_autor;}
							
		// SET's
		function set_aut_idautor($valor){$this->aut_idautor=$valor;}
		function set_aut_autor($valor){$this->aut_autor=$valor;}
	
	
		// funcions de presentacio (estat i valor dels camps/accions)
		function estatInputs(){
			if ($this->aut_idautor==0) return " ";
			else return " disabled ";
		}
		function textSubmit(){
			if ($this->aut_idautor==0) return "Acceptar";
			else return "Modificar";
		}
		function textDelete(){
			if ($this->aut_idautor==0) return "Cancelar";
			else return "Esborrar";
		}			
		
		function esborra(){
			$sql="DELETE FROM AUTORS WHERE AUT_IDAUTOR=".$this->aut_idautor;
			
			$this->DB_Execute($sql);
		}			
		
		function modifica(){
			$sql="UPDATE AUTORS SET AUT_AUTOR='".$this->aut_autor."' WHERE AUT_IDAUTOR=".$this->aut_idautor;
			$this->DB_Execute($sql);
			
			return $this->aut_idautor;			
		}			
		
		function alta($autoI=false){
						
			$sql="INSERT INTO AUTORS (AUT_AUTOR) VALUES ('".$this->aut_autor."')";
			$this->DB_Execute($sql);
			
			$sql_id="SELECT max(AUT_IDAUTOR) AS AUT_IDAUTOR FROM AUTORS";
			$rs_id=$this->DB_Select($sql_id);
			$rs_id=$this->DB_Fetch($rs_id);
			$this->aut_idautor=$rs_id['AUT_IDAUTOR'];
			return $this->aut_idautor;
		}
		
		
}
?>
