<?php

use app\models\Transaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_transaksi',
            // 'pasien.nama_lengkap',
            [
                'attribute' => 'nama_pasien',
                'value' => function ($model) {
                    return $model->pasien->nama_lengkap;
                }
            ],
            'tindakan.nama_tindakan',
            'obat.nama_obat',
            [
                'attribute' => 'pegawai.nama_lengkap',
                // 'headerOptions' => ['style' => 'width: 200px'],
            ],
            'tanggal',
            'jumlah_biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transaksi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_transaksi' => $model->id_transaksi]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>