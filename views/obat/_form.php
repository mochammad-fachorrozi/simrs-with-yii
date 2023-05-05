<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stock_obat')->textInput() ?>

    <?= $form->field($model, 'harga_beli')->textInput() ?>

    <?= $form->field($model, 'harga_jual')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
