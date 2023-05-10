<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */

$this->title = $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Data Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id_pegawai' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_pegawai' => $model->id_pegawai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda yakin ingin menghapus data?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_pegawai',
            'nama_lengkap',
            'nama_panggilan',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'status_perkawinan',
            'agama',
            'pendidikan',
            'alamat:ntext',
            'no_ktp',
            'no_hp',
            'email:email',
            'jenis_pegawai',
            'status_pegawai',
            'jabatan',
            'tanggal_bergabung',
            'status_aktif',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>