<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Update Order: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-update">

    <h1>Редактирование заказа №<?php echo $model->id?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
    <?php $items = $model->orderItems;?>
    <div class="table-responsive">
        <table class = "table table-hover table-striped">
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Количество</th>
                    <th>Цена товара</th>
                    <th>Стоимость</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $item):?>
                    <tr>
                        <td><a href="<?php echo yii\helpers\Url::to(['/product/view', 'id' => $item->product_id])?>"><?php echo $item['name']?></а></td>
                        <td><?php echo $item['qty_item']?></td>
                        <td><?php echo $item['price']?></td>
                        <td><?php echo ($item['sum_item'])?></td>
                        
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

</div>
