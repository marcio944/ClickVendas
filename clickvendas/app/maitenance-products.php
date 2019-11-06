<?php 

use \Click\PageMaitenance;
use \Click\Model\UserMaitenance;
use \Click\Model\ProductMaitenance;

$app->get('/maitenance/products', function(){

	UserMaitenance:: verifyLogin();

	$maitenance = ProductMaitenance::listAll();

	$page = new PageMaitenance();

	$page ->setTpl("products", array(
		"maitenance"=>$maitenance
	));
});

 
$app->get('/maitenance/products/:iduser',function($idassistance){
	
	UserMaitenance::verifyLogin();	
	
	$maitenance = new ProductMaitenance();	
	
	$maitenance->get((int) $idassistance);	
	
	$page = new PageMaitenance();	
	
	$page->setTpl("products-update", array(
	
	"maitenance"=>$maitenance->getValues()	
	
	));

});


$app->get('/maitenance/products/:idproduct/delete', function($idassistance){

	UserMaitenance:: verifyLogin();

	$product = new ProductMaitenance();

	$product->get((int)$idassistance);

	$product->delete();

	header("Location: /maitenance/products");
	exit;

	
}); 

 ?>