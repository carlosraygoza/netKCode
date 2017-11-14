<?php

/**
 * This is the model class for table "employee_has_skill".
 *
 * The followings are the available columns in table 'employee_has_skill':
 * @property integer $idEhs
 * @property integer $idSkill
 * @property integer $idEmployee
 * @property integer $levelExpertise
 * @property integer $levelInterest
 * @property integer $IsTrainer
 *
 * The followings are the available model relations:
 * @property Employee $idEmployee0
 * @property Skill $idSkill0
 */
class EmployeeHasSkill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_has_skill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSkill, idEmployee, levelExpertise, levelInterest, IsTrainer', 'required'),
			array('idSkill, idEmployee, levelExpertise, levelInterest, IsTrainer', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEhs, idSkill, idEmployee, levelExpertise, levelInterest, IsTrainer', 'safe', 'on'=>'search'),
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
			'idEmployee0' => array(self::BELONGS_TO, 'Employee', 'idEmployee'),
			'idSkill0' => array(self::BELONGS_TO, 'Skill', 'idSkill'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEhs' => 'Id Ehs',
			'idSkill' => 'Id Skill',
			'idEmployee' => 'Id Employee',
			'levelExpertise' => 'Level of Expertise',
			'levelInterest' => 'Level of Interest',
			'IsTrainer' => 'Want to be a trainer',
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

		$criteria->compare('idEhs',$this->idEhs);
		$criteria->compare('idSkill',$this->idSkill);
		$criteria->compare('idEmployee',$this->idEmployee);
		$criteria->compare('levelExpertise',$this->levelExpertise);
		$criteria->compare('levelInterest',$this->levelInterest);
		$criteria->compare('IsTrainer',$this->IsTrainer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmployeeHasSkill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
