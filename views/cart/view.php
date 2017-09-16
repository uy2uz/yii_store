<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<div class = "container">
    <?php if(Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success');?>
        </div>
    <?php endif;?>
    
    <?php if(Yii::$app->session->hasFlash('error')):?>
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error');?>
        </div>
    <?php endif;?>
    
    <?php if(!empty($session['cart'])): ?>
    <hr>
    <div class="table-responsive">
        <table class = "table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Количество</th>
                    <th>Цена товара</th>
                    <th>Стоимость</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($session['cart'] as $id => $item):?>
                    <tr>
                        <td><?php echo \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 50 ])?></td>
                        <td><a href="<?php echo Url::to(['product/view', 'id' => $id])?>"><?php echo $item['name']?></а></td>
                        <td><?php echo $item['qty']?></td>
                        <td><?php echo $item['price']?></td>
                        <td><?php echo ($item['qty'] * $item['price'])?></td>
                        <td><span data-id="<?php echo $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                    </tr>
                <?php endforeach;?>
                    <tr>
                        <td colspan="5">Количество товара: </td>
                        <td><?php echo $session['cart.qty']?></td>
                    </tr>
                    <tr>
                        <td colspan="5">Сумма к оплате: </td>
                        <td><?php echo $session['cart.sum']?></td>
                    </tr>
            </tbody>
        </table>
    </div>
    </hr>
    <?php $form = ActiveForm::begin()?>
    
    <?php echo $form->field($order, 'name')?>
    <?php echo $form->field($order, 'email')?>
    <?php echo $form->field($order, 'phone')?>
    <?php echo $form->field($order, 'address')?>
    <?php echo Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
    <?php ActiveForm::end()?>
    <?php else: ?>
        <h3>Корзина пуста</h3>
    <?php endif; ?>
</div>