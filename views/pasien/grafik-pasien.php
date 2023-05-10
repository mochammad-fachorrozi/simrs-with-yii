<?php

use dosamigos\highcharts\HighCharts;
use app\models\Pasien;


$this->title = 'Data Grafik Pasien';

// membuat object & panggil fungsi(kalo static tidak usah pake new)
// $obj = new Pasien();
// $ar_pasien = $obj->grafikPasien();
$ar_pasien = Pasien::grafikPasien();
// print_r($ar_pasien);exit;
foreach ($ar_pasien as $values) {
    $a[0] = ($values['tanggal']);
    $a[] = ($values['tanggal']);
    $b[] = [
        'name' => $values['tanggal'],
        'data' => [(int)$values['jumlah']],
        // 'data' => $values['jenis_kelamin'],
    ];
}

?>

<?=
\dosamigos\highcharts\HighCharts::widget([
    'clientOptions' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => [
            'text' => 'Data Grafik Pasien Baru'
        ],
        'xAxis' => [
            'categories' => [
                'Tanggal'
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Jumlah'
            ]
        ],
        'series' => $b
    ]
]);
// ... 