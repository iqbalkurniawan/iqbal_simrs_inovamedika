<?php

/**
 * This is the model class for table "ms_pegawai".
 *
 * The followings are the available columns in table 'ms_pegawai':
 * @property string $id
 * @property string $nip
 * @property string $nama_pegawai
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $unitkerja_id
 * @property string $jabatan_id
 * @property string $no_telepon
 * @property string $created_at
 * @property string $updated_at
 */
class MsPegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ms_pegawai';
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
			array('nip', 'length', 'max'=>18),
			array('nama_pegawai', 'length', 'max'=>255),
			array('unitkerja_id, jabatan_id', 'length', 'max'=>20),
			array('no_telepon', 'length', 'max'=>50),
			array('tanggal_lahir, alamat, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nip, nama_pegawai, tanggal_lahir, alamat, unitkerja_id, jabatan_id, no_telepon, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'nip' => 'Nip',
			'nama_pegawai' => 'Nama Pegawai',
			'tanggal_lahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'unitkerja_id' => 'Unitkerja',
			'jabatan_id' => 'Jabatan',
			'no_telepon' => 'No Telepon',
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
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nama_pegawai',$this->nama_pegawai,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('unitkerja_id',$this->unitkerja_id,true);
		$criteria->compare('jabatan_id',$this->jabatan_id,true);
		$criteria->compare('no_telepon',$this->no_telepon,true);
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
	 * @return MsPegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
