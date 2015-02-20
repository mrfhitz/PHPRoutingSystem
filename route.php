<?php 
	$controller = (isset($_GET['controller']) && !empty($_GET['controller'])) ? $_GET['controller'] : 'Index';
	$action= (isset($_GET['action']) && !empty($_GET['action'])) ? $_GET['action'] : "IndexAction";
	$args = array();
	$args[] = (isset($_GET['arg1']) && !empty($_GET['arg1'])) ? $_GET['arg1'] : null;
	$args[] = (isset($_GET['arg2']) && !empty($_GET['arg2'])) ? $_GET['arg2'] : null;
	$args[] = (isset($_GET['arg3']) && !empty($_GET['arg3'])) ? $_GET['arg3'] : null;

	if( class_exists( $controller."Controller", false )) {
	    $controller = $controller."Controller";
	    $cont = new $controller(); 

		if( method_exists( $cont, $action )  ) $cont->$action($args);
		else throw new Exception( "Not found Action: <b>$action</b> in the controller: <b>$controller</b>" );
    
    } else throw new Exception( 'Class Controller ' . $controller . ' not found in: ' . __LINE__ );