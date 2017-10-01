<?php

use yii\helpers\Html;

?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
                                                
                                                <ul class="catalog category-products">
                                                    <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                                                </ul>

						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
																	
					</div>
				</div>
                            

				
				<div class="col-sm-9 padding-right">
                                    <?php if(!empty($hits)): ?>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                                                <?php foreach($hits as $hit): ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
                                                                                        <?php echo Html::img("@web/images/products/{$hit->img}", ['alt' => $hit->name]) ?>
                                                                                        <h2>$<?php echo $hit->price ?></h2>
                                                                                        <p><a href = "<?php echo yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>"><?php echo $hit->name?></a></p>
                                                                                        <a href="<?php echo yii\helpers\Url::to(['cart/add', 'id' => $hit->id]) ?>" data-id="<?php echo $hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
                                                                    <?php if($hit->new): ?>
                                                                        <?php echo Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'new']); ?>
                                                                    <?php endif; ?>
                                                                    
                                                                    <?php if($hit->sale): ?>
                                                                        <?php echo Html::img("@web/images/home/sale.png", ['alt' => 'Распродажа', 'class' => 'new']); ?>
                                                                    <?php endif; ?>
                                                                    
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div><!--features_items-->
                                    <?php endif; ?>    
									
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
                                                            <?php $count = count($hits); $i=0; foreach($hits as $hit):?>
                                                                <?php if($i % 3 ==0 ):?>
								<div class="item <?php if($i == 0) echo 'active' ?>">
                                                                <?php endif;?>    
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                                                                                        <a href="<?php echo \yii\helpers\Url::to(['product/view', 'id' =>$hit->id])?>"><?php echo Html::img("@web/images/products/{$hit->img}", ['alt' => $hit->name])?></a>													<h2>$<?php echo $hit->price ?></h2>
                                                                                                        <p><a href="<?php echo \yii\helpers\Url::to(['product/view', 'id' =>$hit->id])?>"><?php echo $hit->name ?></a></p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
                                                                <?php $i++; if($i % 3 == 0 || $i == $count):?>    
                                        			</div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
