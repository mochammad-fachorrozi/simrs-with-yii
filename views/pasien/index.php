<?php

use app\models\Pasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\PasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Pasien', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Grafik Pasien Baru', ['grafik-pasien'], ['class' => 'btn btn-secondary']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pasien',
            'nama_lengkap',
            'no_ktp',
            'no_hp',
            // 'email:email',
            'jenis_kelamin',
            'agama',
            // 'alamat:ntext',
            //'status_perkawinan',
            //'pekerjaan',
            // 'riwayat_penyakit:ntext',
            //'tempat_lahir',
            'tanggal_lahir',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>