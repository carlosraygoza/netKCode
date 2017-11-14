<?php

class SkillController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
//				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        //new model for admin views
        $modelEhsAdmin = EmployeeHasSkill::model(); //All('idSkill',array($id)); //ByAttributes(array('idSkill'=>$id));
        //obtain data from EmployeeHasSkill 
        $modelEhs = EmployeeHasSkill::model()->findByAttributes(array('idSkill'=>$id, 'idEmployee'=>Yii::app()->user->getId()));
        //if it is for "add" a skill, create a new model of EmployeeHasSkill
        if(empty($modelEhs)) $modelEhs = new EmployeeHasSkill;
        if(isset($_POST['EmployeeHasSkill'])){
            //$modelEhs=new EmployeeHasSkill;
            $modelEhs->attributes=$_POST['EmployeeHasSkill'];
            if($modelEhs->save())
				$this->redirect(array('view','id'=>$id));
        }
        
		$this->render('view',array(
			'model'=>$this->loadModel($id),
            'ehs'=>$modelEhs,
            'tableSkill' => $modelEhsAdmin, //attribute for grouped by people table
            //'tableLocation'
            'idSkill'=>$id,
            'idEmployee'=>Yii::app()->user->getId(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Skill;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Skill']))
		{
			$model->attributes=$_POST['Skill'];
            
			if($model->save()){
                //skill has skill save
                $modelSkillHasSkill = new SkillHasSkill;
                $modelSkillHasSkill->attributes = $_POST['SkillHasSkill'];
                
                $modelSkillHasSkill->idSkill_child = $model->idSkill;   
                //$modelSkillHasSkill->idSkill_parent = $POST['SkillHasSkill'];
              //  echo "$modelSkillHasSkill->idSkill_parent";
               // echo "$modelSkillHasSkill->idSkill_child";

                
                if($modelSkillHasSkill->save()){
				    $this->redirect(array('view','id'=>$model->idSkill));
                }
            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Skill']))
		{
			$model->attributes=$_POST['Skill'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSkill));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Skill');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
        $skill = Skill::model()->findAll();
    }
	


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Skill('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Skill']))
			$model->attributes=$_GET['Skill'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Skill the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Skill::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Skill $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='skill-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionHandleHtmlTable(){
        sleep(2);
        if(isset($_POST)){
            //return the POST variable back
            //the widget will show an alert() with this data
            print_r($_POST);
        }
    }
    
    public function actions()
    {
        return array(
            'exportTable'=>array(
                'class'=>'ext.htmltableui.actions.HtmlExportCsv',
                'path'=>'/csv/',
            ),
        );
    }
    
    public function actionGroupedLocation() {
        $sql = "SELECT levelExpertise, levelInterest, nameLocation, employee_has_skill.idEmployee FROM employee_has_Skill
        INNER JOIN Employee
        ON employee_has_Skill.idEmployee = Employee.idEmployee
        INNER JOIN Location
        ON Employee.idLocation = Location.idLocation
        WHERE employee_has_Skill.idSkill = 4";
        
        $rawData = Yii::app()->db->createCommand($sql)->queryScalar();
        //$count = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();
 
        $model = new CSqlDataProvider($rawData, array( 
                    'keyField' => 'MAIN_ID', 
                    'totalItemCount' => count($rawdata),
                    'sort' => array(
                        'attributes' => array(
                            'levelExpertise','levelInterest','nameLocation'
                        ),
                        'defaultOrder' => array(
                            'ap' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 11,
                    ),
                ));
 
        $this->render('view', array(
            'model' => $model,
        ));
    }
}
