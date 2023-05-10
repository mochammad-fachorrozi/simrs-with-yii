<?php

use yii\helpers\Html;
// use kartik\date\DatePicker;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'status_active')->dropDownList(['0', '1',], ['prompt' => '']) ?>

    <?= $form->field($model, 'role_user')->textInput(['maxlength' => true]) ?>
    <?php // echo $form->field($model, 'created_at')->textInput()
    ?>
    <?php
    // echo date_default_timezone_get();
    //echo date('d-M-Y  H:i:s')

    // echo $form->field($model, 'created_at')->widget(DateTimePicker::classname(), [
    //     'language' => 'id',
    //     'options' => ['placeholder' => 'Tanggal dibuat ..'],
    //     'pluginOptions' => [
    //         'format' => 'dd-MM-yyyy HH:mm:ss',
    //         'startDate' => '01-Januari-2022 00:00:00',
    //         'todayHighlight' => true,
    //         'autoClose' => true,
    //     ]
    // ]);

    // echo '<label>Start Date/Time</label>';
    // echo DateTimePicker::widget([
    //     'name' => 'datetime_10',
    //     'options' => ['placeholder' => 'Select operating time ...'],
    //     'convertFormat' => true,
    //     'pluginOptions' => [
    //         'format' => 'd-M-Y g:i A',
    //         'startDate' => '01-Mar-2014 12:00 AM',
    //         'todayHighlight' => true
    //     ]
    // ]);
    ?>



    <div class="form-group mt-2">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>