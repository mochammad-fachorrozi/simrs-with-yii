<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PegawaiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'nama_panggilan') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?php echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'status_perkawinan') 
    ?>

    <?php // echo $form->field($model, 'agama') 
    ?>

    <?php // echo $form->field($model, 'pendidikan') 
    ?>

    <?php // echo $form->field($model, 'alamat') 
    ?>

    <?php // echo $form->field($model, 'no_ktp') 
    ?>

    <?php // echo $form->field($model, 'no_hp') 
    ?>

    <?php // echo $form->field($model, 'email') 
    ?>

    <?php // echo $form->field($model, 'jenis_pegawai') 
    ?>

    <?php // echo $form->field($model, 'status_pegawai') 
    ?>

    <?php // echo $form->field($model, 'jabatan') 
    ?>

    <?php // echo $form->field($model, 'tanggal_bergabung') 
    ?>

    <?php // echo $form->field($model, 'status_aktif') 
    ?>

    <?php // echo $form->field($model, 'created_at') 
    ?>

    <?php // echo $form->field($model, 'updated_at') 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>