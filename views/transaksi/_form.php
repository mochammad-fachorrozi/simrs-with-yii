<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pasien;
use app\models\Tindakan;
use app\models\Obat;
use app\models\Pegawai;
use yii\helpers\ArrayHelper;

$ar_pasien = ArrayHelper::map(Pasien::find()->asArray()->all(), 'id_pasien', 'nama_lengkap');
$ar_tindakan = ArrayHelper::map(Tindakan::find()->asArray()->all(), 'id_tindakan', 'nama_tindakan');
$ar_obat = ArrayHelper::map(Obat::find()->asArray()->all(), 'id_obat', 'nama_obat');
$ar_pegawai = ArrayHelper::map(Pegawai::find()->asArray()->all(), 'id_pegawai', 'nama_lengkap');


/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'pasien_id')->textInput() 
    ?>

    <?php echo $form->field($model, 'pasien_id')->dropDownList(
        $ar_pasien,
        ['prompt' => 'Pilih Pasien ..']
    );
    ?>

    <?php echo $form->field($model, 'tindakan_id')->dropDownList(
        $ar_tindakan,
        ['prompt' => 'Pilih Tindakan ..']
    );
    ?>

    <?php echo $form->field($model, 'obat_id')->dropDownList(
        $ar_obat,
        ['prompt' => 'Pilih Obat ..']
    );
    ?>

    <?php echo $form->field($model, 'pegawai_id')->dropDownList(
        $ar_pegawai,
        ['prompt' => 'Pilih Pegawai ..']
    );
    ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jumlah_biaya')->textInput() ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>