<?php

/**
 * This is the model class for table "skill".
 *
 * The followings are the available columns in table 'skill':
 * @property integer $idSkill
 * @property string $nameSkill
 * @property string $descriptionSkill
 * @property string $complexity
 *
 * The followings are the available model relations:
 * @property EmployeeHasSkill[] $employeeHasSkills
 * @property GroupHasSkill[] $groupHasSkills
 * @property RoleHasSkill[] $roleHasSkills
 * @property SkillHasSkill[] $skillHasSkills
 * @property SkillHasSkill[] $skillHasSkills1
 * @property SkillHasTraining[] $skillHasTrainings
 */
class Skill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'skill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nameSkill, descriptionSkill, complexity', 'required'),
			array('nameSkill, complexity', 'length', 'max'=>45),
			array('descriptionSkill', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSkill, nameSkill, descriptionSkill, complexity', 'safe', 'on'=>'search'),
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
			'employeeHasSkills' => array(self::HAS_MANY, 'EmployeeHasSkill', 'idSkill'),
			'groupHasSkills' => array(self::HAS_MANY, 'GroupHasSkill', 'idSkill'),
			'roleHasSkills' => array(self::HAS_MANY, 'RoleHasSkill', 'idSkill'),
			'skillHasSkills' => array(self::HAS_MANY, 'SkillHasSkill', 'idSkill_child'),
			'skillHasSkills1' => array(self::HAS_MANY, 'SkillHasSkill', 'idSkill_parent'),
			'skillHasTrainings' => array(self::HAS_MANY, 'SkillHasTraining', 'idSkill'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSkill' => 'ID Skill',
			'nameSkill' => 'Skill name',
			'descriptionSkill' => 'Detailed description',
			'complexity' => 'Complexity',
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

		$criteria->compare('idSkill',$this->idSkill);
		$criteria->compare('nameSkill',$this->nameSkill,true);
		$criteria->compare('descriptionSkill',$this->descriptionSkill,true);
		$criteria->compare('complexity',$this->complexity,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Skill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
