<?php

/**
 * This is the model class for table "order_design".
 *
 * The followings are the available columns in table 'order_design':
 * @property integer $no_order
 * @property string $tgl_order
 * @property string $nik_order
 * @property string $sales_order
 * @property string $bagian_order
 * @property string $keperluan_order
 * @property string $model_order
 * @property string $chassis_order
 * @property string $design_order
 * @property string $ext_tgl_order
 * @property string $status_order
 * @property string $manager_order
 * @property string $tgl_fix_order
 * @property string $keterangan_order
 * @property string $no_skrb
 */
class menu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_design';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_order, tgl_order, sales_order, model_order, chassis_order', 'required'),
			array('no_order', 'numerical', 'integerOnly'=>true),
			array('nik_order, sales_order, bagian_order, keperluan_order, model_order, chassis_order, design_order, status_order, manager_order, no_skrb', 'length', 'max'=>250),
			array('ext_tgl_order, tgl_fix_order, keterangan_order', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('no_order, tgl_order, nik_order, sales_order, bagian_order, keperluan_order, model_order, chassis_order, design_order, ext_tgl_order, status_order, manager_order, tgl_fix_order, keterangan_order, no_skrb', 'safe', 'on'=>'search'),
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
			'no_order' => 'No Order',
			'tgl_order' => 'Tgl Order',
			'nik_order' => 'Nik Order',
			'sales_order' => 'Sales Order',
			'bagian_order' => 'Bagian Order',
			'keperluan_order' => 'Keperluan Order',
			'model_order' => 'Model Order',
			'chassis_order' => 'Chassis Order',
			'design_order' => 'Design Order',
			'ext_tgl_order' => 'Ext Tgl Order',
			'status_order' => 'Status Order',
			'manager_order' => 'Manager Order',
			'tgl_fix_order' => 'Tgl Fix Order',
			'keterangan_order' => 'Keterangan Order',
			'no_skrb' => 'No Skrb',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('no_order',$this->no_order);
		$criteria->compare('tgl_order',$this->tgl_order,true);
		$criteria->compare('nik_order',$this->nik_order,true);
		$criteria->compare('sales_order',$this->sales_order,true);
		$criteria->compare('bagian_order',$this->bagian_order,true);
		$criteria->compare('keperluan_order',$this->keperluan_order,true);
		$criteria->compare('model_order',$this->model_order,true);
		$criteria->compare('chassis_order',$this->chassis_order,true);
		$criteria->compare('design_order',$this->design_order,true);
		$criteria->compare('ext_tgl_order',$this->ext_tgl_order,true);
		$criteria->compare('status_order',$this->status_order,true);
		$criteria->compare('manager_order',$this->manager_order,true);
		$criteria->compare('tgl_fix_order',$this->tgl_fix_order,true);
		$criteria->compare('keterangan_order',$this->keterangan_order,true);
		$criteria->compare('no_skrb',$this->no_skrb,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}