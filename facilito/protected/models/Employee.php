<?php

/**
 * This is the model class for table "Employee".
 *
 * The followings are the available columns in table 'Employee':
 * @property integer $idEmployee
 * @property string $nameEmployee
 * @property string $username
 * @property string $password
 * @property string $idDirectSupervisor
 * @property string $namePicture
 * @property string $typePicture
 * @property string $sizePicture
 * @property string $idLocation
 * @property string $businessUnit
 * @property string $discipline
 * @property string $idTeam
 * @property string $hiringDate
 * @property string $pdc
 * @property integer $hide
 *
 * The followings are the available model relations:
 * @property Location $idLocation0
 * @property Team $idTeam0
 * @property EmployeeHasRole[] $employeeHasRoles
 * @property EmployeeHasSkill[] $employeeHasSkills
 * @property GroupHasEmployee[] $groupHasEmployees
 * @property Log[] $logs
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmployee, nameEmployee, username, password, idDirectSupervisor, idLocation, businessUnit, discipline, idTeam, hiringDate, pdc, hide', 'required'),
			array('idEmployee, hide', 'numerical', 'integerOnly'=>true),
			array('nameEmployee, namePicture, typePicture, sizePicture', 'length', 'max'=>255),
			array('username, password, discipline, idTeam, hiringDate, pdc', 'length', 'max'=>45),
			array('idDirectSupervisor, businessUnit', 'length', 'max'=>10),
			array('idLocation', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEmployee, nameEmployee, username, password, idDirectSupervisor, namePicture, typePicture, sizePicture, idLocation, businessUnit, discipline, idTeam, hiringDate, pdc, hide', 'safe', 'on'=>'search'),
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
			'idLocation0' => array(self::BELONGS_TO, 'Location', 'idLocation'),
			'idTeam0' => array(self::BELONGS_TO, 'Team', 'idTeam'),
			'employeeHasRoles' => array(self::HAS_MANY, 'EmployeeHasRole', 'idEmployee'),
			'employeeHasSkills' => array(self::HAS_MANY, 'EmployeeHasSkill', 'idEmployee'),
			'groupHasEmployees' => array(self::HAS_MANY, 'GroupHasEmployee', 'idEmployee'),
			'logs' => array(self::HAS_MANY, 'Log', 'idEmployee'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEmployee' => 'Id Employee',
			'nameEmployee' => 'Name Employee',
			'username' => 'Username',
			'password' => 'Password',
			'idDirectSupervisor' => 'Direct Supervisor',
			'namePicture' => 'Name Picture',
			'typePicture' => 'Type Picture',
			'sizePicture' => 'Size Picture',
			'idLocation' => 'Location',
			'businessUnit' => 'Business Unit',
			'discipline' => 'Discipline',
			'idTeam' => 'Team',
			'hiringDate' => 'Hiring Date',
			'pdc' => 'Pdc',
			'hide' => 'Hide',
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

		$criteria->compare('idEmployee',$this->idEmployee);
		$criteria->compare('nameEmployee',$this->nameEmployee,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('idDirectSupervisor',$this->idDirectSupervisor,true);
		$criteria->compare('namePicture',$this->namePicture,true);
		$criteria->compare('typePicture',$this->typePicture,true);
		$criteria->compare('sizePicture',$this->sizePicture,true);
		$criteria->compare('idLocation',$this->idLocation,true);
		$criteria->compare('businessUnit',$this->businessUnit,true);
		$criteria->compare('discipline',$this->discipline,true);
		$criteria->compare('idTeam',$this->idTeam,true);
		$criteria->compare('hiringDate',$this->hiringDate,true);
		$criteria->compare('pdc',$this->pdc,true);
		$criteria->compare('hide',$this->hide);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
