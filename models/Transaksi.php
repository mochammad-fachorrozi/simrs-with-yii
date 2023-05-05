<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int $pasien_id
 * @property int $tindakan_id
 * @property int $obat_id
 * @property int $pegawai_id
 * @property string $tanggal
 * @property int $jumlah_biaya
 *
 * @property Obat $obat
 * @property Pasien $pasien
 * @property Pegawai $pegawai
 * @property Tindakan $tindakan
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pasien_id', 'tindakan_id', 'obat_id', 'pegawai_id', 'jumlah_biaya'], 'required'],
            [['pasien_id', 'tindakan_id', 'obat_id', 'pegawai_id', 'jumlah_biaya'], 'integer'],
            [['tanggal'], 'safe'],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['pegawai_id' => 'id_pegawai']],
            [['obat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::class, 'targetAttribute' => ['obat_id' => 'id_obat']],
            [['pasien_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['pasien_id' => 'id_pasien']],
            [['tindakan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::class, 'targetAttribute' => ['tindakan_id' => 'id_tindakan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'pasien_id' => 'Pasien ID',
            'tindakan_id' => 'Tindakan ID',
            'obat_id' => 'Obat ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal' => 'Tanggal',
            'jumlah_biaya' => 'Jumlah Biaya',
        ];
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['id_obat' => 'obat_id']);
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id_pasien' => 'pasien_id']);
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id_pegawai' => 'pegawai_id']);
    }

    /**
     * Gets query for [[Tindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakan()
    {
        return $this->hasOne(Tindakan::class, ['id_tindakan' => 'tindakan_id']);
    }
}
