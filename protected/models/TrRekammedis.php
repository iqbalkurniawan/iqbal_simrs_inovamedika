<?php

/**
 * This is the model class for table "tr_rekammedis".
 *
 * The followings are the available columns in table 'tr_rekammedis':
 * @property string $id
 * @property string $pasien_id
 * @property string $status_registrasi
 * @property string $diagnosa
 * @property string $tanggal_masuk
 * @property string $tanggal_keluar
 * @property string $kamar_id
 * @property string $poli_id
 * @property string $dokter_id
 * @property string $created_at
 * @property string $updated_at
 */
class TrRekammedis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tr_rekammedis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at', 'required'),
			array('pasien_id, kamar_id, poli_id, dokter_id', 'length', 'max'=>20),
			array('status_registrasi', 'length', 'max'=>5),
			array('diagnosa, tanggal_masuk, tanggal_keluar, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pasien_id, status_registrasi, diagnosa, tanggal_masuk, tanggal_keluar, kamar_id, poli_id, dokter_id, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pasien_id' => 'Pasien',
			'status_registrasi' => 'Status Registrasi',
			'diagnosa' => 'Diagnosa',
			'tanggal_masuk' => 'Tanggal Masuk',
			'tanggal_keluar' => 'Tanggal Keluar',
			'kamar_id' => 'Kamar',
			'poli_id' => 'Poli',
			'dokter_id' => 'Dokter',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('pasien_id',$this->pasien_id,true);
		$criteria->compare('status_registrasi',$this->status_registrasi,true);
		$criteria->compare('diagnosa',$this->diagnosa,true);
		$criteria->compare('tanggal_masuk',$this->tanggal_masuk,true);
		$criteria->compare('tanggal_keluar',$this->tanggal_keluar,true);
		$criteria->compare('kamar_id',$this->kamar_id,true);
		$criteria->compare('poli_id',$this->poli_id,true);
		$criteria->compare('dokter_id',$this->dokter_id,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TrRekammedis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
