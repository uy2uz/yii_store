<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;

AppAsset::register($this);
LtAppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Функции администратора | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php $this->beginBody() ?>    
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +38(044) 444 44 44</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@e-store.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
                                                    <a href="<?php echo yii\helpers\Url::home() ?>"><?php echo Html::img('@web/images/home/logo.png', ['alt' => 'E-SHOPPER']) ?></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if(!Yii::$app->user->isGuest): ?>
                                                                <li><a href="<?php echo \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i><?php echo Yii::$app->user->identity['username']?> (Выход)</a></li>
                                                                <?php else:?> 
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                                                                <?php endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						
                                            <div class="mainmenu pull-left">
                                                <ul class="nav navbar-nav collapse navbar-collapse">
                                                    <li><a href="<?php echo \yii\helpers\Url::to(['/admin'])?>" class="active">Заказы</a></li>
                                                    <li class="dropdown"><a href="#">Категории<i class="fa fa-angle-down"></i></a>
                                                        <ul role="menu" class="sub-menu">
                                                            <li><a href="<?php echo \yii\helpers\Url::to(['category/index'])?>">Список категорий</a></li> 
                                                            <li><a href="<?php echo \yii\helpers\Url::to(['category/create'])?>">Добавить категорию</a></li> 
                                                        </ul>
                                                    </li> 
                                                    <li class="dropdown"><a href="#">Товары<i class="fa fa-angle-down"></i></a>
                                                        <ul role="menu" class="sub-menu">
                                                            <li><a href="<?php echo \yii\helpers\Url::to(['product/index'])?>">Список товаров</a></li>
                                                            <li><a href="<?php echo \yii\helpers\Url::to(['product/create'])?>">Добавить товар</a></li>
                                                        </ul>
                                                    </li> 
                                                </ul>
                                            </div>
                                        </div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                                                    <form method="get" action="<?php echo \yii\helpers\Url::to(['category/search']) ?>">
							<input type="text" placeholder="Search" name="q">
                                                    </form>    
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
<div class="container">
    <?php if(Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success');?>
        </div>
    <?php endif;?>
    <?php echo $content; ?>
</div>	
	<footer id="footer"><!--Footer-->
		
		</div>
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 E-Store.</p>
					<p class="pull-right">Designed in Ukraine</p>
				</div>
			</div>
		</div>
		
	</footer>     
      
        
<?php $this->endBody() ?>        
</body>
</html>
<?php $this->endPage() ?>
