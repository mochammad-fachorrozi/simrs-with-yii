<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_lengkap
 * @property string|null $no_ktp
 * @property string|null $no_hp
 * @property string|null $email
 * @property string|null $jenis_kelamin
 * @property string|null $agama
 * @property string|null $alamat
 * @property string|null $status_perkawinan
 * @property string|null $pekerjaan
 * @property string|null $riwayat_penyakit
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string|null $created_at
 *
 * @property Transaksi[] $transaksis
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap'], 'required'],
            [['jenis_kelamin', 'alamat', 'riwayat_penyakit'], 'string'],
            [['tanggal_lahir', 'created_at'], 'safe'],
            [['nama_lengkap'], 'string', 'max' => 250],
            [['no_ktp'], 'string', 'max' => 16],
            [['no_hp', 'agama', 'status_perkawinan'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['pekerjaan', 'tempat_lahir'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_lengkap' => 'Nama Lengkap',
            'no_ktp' => 'No Ktp',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'status_perkawinan' => 'Status Perkawinan',
            'pekerjaan' => 'Pekerjaan',
            'riwayat_penyakit' => 'Riwayat Penyakit',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::class, ['pasien_id' => 'id_pasien']);
    }
}
