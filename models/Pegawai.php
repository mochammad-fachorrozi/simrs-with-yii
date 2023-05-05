<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string|null $nama_lengkap
 * @property string|null $nama_panggilan
 * @property string|null $jenis_kelamin
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string|null $status_perkawinan
 * @property string|null $agama
 * @property string|null $pendidikan
 * @property string|null $alamat
 * @property string|null $no_ktp
 * @property string|null $no_hp
 * @property string|null $email
 * @property string|null $jenis_pegawai
 * @property string|null $status_pegawai
 * @property string|null $jabatan
 * @property string|null $tanggal_bergabung
 * @property string|null $status_aktif
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_kelamin', 'alamat', 'jenis_pegawai', 'status_aktif'], 'string'],
            [['tanggal_lahir', 'tanggal_bergabung', 'created_at', 'updated_at'], 'safe'],
            [['nama_lengkap'], 'string', 'max' => 250],
            [['nama_panggilan', 'status_perkawinan', 'agama', 'pendidikan', 'no_hp', 'status_pegawai'], 'string', 'max' => 20],
            [['tempat_lahir', 'jabatan'], 'string', 'max' => 50],
            [['no_ktp'], 'string', 'max' => 16],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_lengkap' => 'Nama Lengkap',
            'nama_panggilan' => 'Nama Panggilan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'status_perkawinan' => 'Status Perkawinan',
            'agama' => 'Agama',
            'pendidikan' => 'Pendidikan',
            'alamat' => 'Alamat',
            'no_ktp' => 'No Ktp',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'jenis_pegawai' => 'Jenis Pegawai',
            'status_pegawai' => 'Status Pegawai',
            'jabatan' => 'Jabatan',
            'tanggal_bergabung' => 'Tanggal Bergabung',
            'status_aktif' => 'Status Aktif',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
