<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Click Vendas</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/res/site/css/bootstrap.min.css"> 
    
    <!-- Font Awesome -->
  <link rel="stylesheet" href="/res/site/css/font-awesome.min.css"> 
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/res/site/css/owl.carousel.css">  
    <link rel="stylesheet" href="/res/site/css/responsive.css">
    <link rel="stylesheet" href="/res/site/css/styles.css">
    <link rel="stylesheet" href="/res/site/css/menu.css">


  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="menu">

                      <ul class="menu-list">
                        <li><a href="/"><i class="fa fa-home"></i><strong> Home</strong></a></li>
                        <li>
                          <a href="#"><i class="fa fa-crop"></i> <strong>Produtos</strong></a>
                           <ul class="sub-menu">
                           <li><a href="#"><?php require $this->checkTemplate("categories-menu");?></a></li>
                          </ul>
                        </li>
                                   
                            <li><a href="/profile"><i class="fa fa-user"></i><strong> Minha Conta</strong></a></li>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i> <strong>Meu Carrinho</strong></a></li>
                            <?php if( checkLogin(false) ){ ?>

                            <li><a href="/profile"><i class="fa fa-user"></i> <?php echo getUserName(); ?></a></li>
                            <li><a href="/logout"><i class="fa fa-close"></i><strong> Sair </strong></a></li>
                            <?php }else{ ?>

                            <li><a href="/login"><i class="fa fa-lock"></i><strong> Login</strong></a></li>
                            <?php } ?>

                            
                            
                      </ul>
                    </div>

                </div>
                
                <div class="col-md-4">

                        <div class="user-menu">
                        <ul>
                            <li><a href="/admin/login"><i class="fa fa-lock"></i><strong> Área Restrita</strong></a></li>
                            <li><a href="/maitenance/login"><i class="fa fa-lock"></i><strong> Área de Manutenção</strong></a></li>
                        </ul>
                    </div>
                        
                    
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="/"><img src="/res/site/img/logotipo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="\cart"><strong>Carrinho - </strong><span class="cart-amunt"></span> <i class="fa fa-shopping-cart"> <strong>R$ <?php echo getCartVlSubTotal(); ?> </strong></i> <span class="product-count"><?php echo getCartNrQtd(); ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

     <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->