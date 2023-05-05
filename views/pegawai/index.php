<?php

use app\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\PegawaiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // [
            //     'header' => 'Nama',
            //     'headerOptions' => ['style' => 'width: 200px', 'class' => 'text-center'],
            //     'contentOptions' => ['class' => 'text-center'],
            //     'value' => function ($model) {
            //         return $model->nama_lengkap;
            //     }
            // ],
            // 'id_pegawai',
            'nama_lengkap',
            // 'nama_panggilan',
            'jenis_kelamin',
            'tempat_lahir',
            [
                'header' => 'Tanggal Lahir',
                'headerOptions' => ['class' => 'text-center text-primary'],
                'contentOptions' => ['class' => 'text-center'],
                'value' => function ($model) {
                    return date("d-M-Y", strtotime($model->tanggal_lahir));
                }
            ],
            'status_perkawinan',
            'agama',
            //'pendidikan',
            //'alamat:ntext',
            //'no_ktp',
            //'no_hp',
            //'email:email',
            //'jenis_pegawai',
            //'status_pegawai',
            //'jabatan',
            //'tanggal_bergabung',
            //'status_aktif',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>