<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property string $name
 * @property string $class
 * @property string $description_text
 * @property integer $price
 * @property integer $old_price
 * @property string $description_text_en
 * @property string $description_text_ru
 * @property string $name_en
 * @property string $name_ru
 *
 * The followings are the available model relations:
 * @property Clients[] $clients
 * @property Orders[] $orders
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price, old_price', 'numerical', 'integerOnly'=>true),
			array('name, class, description_text, description_text_en, description_text_ru, name_en, name_ru', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, class, description_text, price, old_price, description_text_en, description_text_ru, name_en, name_ru', 'safe', 'on'=>'search'),
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
			'clients' => array(self::HAS_MANY, 'Clients', 'current_packet_id'),
			'orders' => array(self::HAS_MANY, 'Orders', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'class' => 'Class',
			'description_text' => 'Description Text',
			'price' => 'Price',
			'old_price' => 'Old Price',
			'description_text_en' => 'Description Text En',
			'description_text_ru' => 'Description Text Ru',
			'name_en' => 'Name En',
			'name_ru' => 'Name Ru',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('class',$this->class,true);
		$criteria->compare('description_text',$this->description_text,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('old_price',$this->old_price);
		$criteria->compare('description_text_en',$this->description_text_en,true);
		$criteria->compare('description_text_ru',$this->description_text_ru,true);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('name_ru',$this->name_ru,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * Extension
     */

    public function priceFmt()
    {
        return number_format($this->price / 100,2,'.','');
    }

    public function oldPriceFmt()
    {
        return number_format($this->old_price / 100,2,'.','');
    }
}
