<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php
# CREACIO DEL MENU AMB TOTES LES OPCIONS A GESTIONAR
		$ruta="../../";
		include_once $ruta."gestio/classes/cls_includes.php";	
		$gen=new general($ruta);
		
?>

<link href="<?=$ruta?>gestio/menu/stilsMenu.css" rel="stylesheet" type="text/css">
<style>
body, tr, td, p, li { font-family:  verdana; font-size: 10px; }
		hr { color: #355b82; height : 1px; }
		a {color:#355b82; text-decoration:none; }
		a:hover{ font-weight:bold;}
		input { font-family:verdana; font-size:10px; position:absolute; top:0px; right: 0px;
		
		}
body {
	margin-left: 10px;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 5px;
}
</style>
<title>Documento sin t&iacute;tulo</title>
<script language="javascript">
		function reloadMenu() {
			parent.menuEsq.location.reload();
		}
	</script>
<!-- Fitxers javascript necessaris per generar el menu -->
<script language="JavaScript" src="<?=$ruta?>gestio/menu/tree/tree.js"></script>
<script language="JavaScript" src="<?=$ruta?>gestio/menu/tree/tree_tpl.js"></script>
</head>

<body>
<script language="JavaScript">
var TREE_ITEMS = [
		['Menu Gestió ',null,
			["Gestió d'Autors",null,
						['Alta Nou Autor','<?=$ruta?>gestio/controladors/c_autor.php?accio=a'],
						["Llistat d'Autors",'<?=$ruta?>gestio/controladors/c_autor.php?accio=l']
				
			]
		]<!--Tanca menu gestio-->
];
</script>
<script language="JavaScript">
	<!--
	new tree (TREE_ITEMS, tree_tpl);
	//-->
</script>
<div id="reload"><input type="button" value="reload" onClick="javascript:reloadMenu();" class="inputText"></div>

</body>
</html>
