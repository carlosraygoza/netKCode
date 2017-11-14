<?php
//nombre de clase igual que el archivo
class CountriesController extends Controller{
    public function actionIndex(){
        /*
        //se pueden realizar acciones en la tabla mediante modelos
        //inicializar el modelo
        $model = new Countries();
        //acceder a la base de datos mediante objetos
        $model->name = "México"; //"name" de la tabla
        $model->status = 0;
        //invocar el metodo guardar, insertando datos en base de datos
        $model->save();
        */
        
        //settear error
        /*
        Yii::app()->user->setFlash("error", "This is the message error");
        Yii::app()->user->setFlash("success", "This is a success error");
        Yii::app()->user->setFlash("info", "This is an info error");
        */
        
        //consultar tabla
        //Countries es para acceder a la clase del modelo mediante el método estático 
        $countries = Countries::model()->findAll(); //findAll accede a todos los datos de la tabla
        //enviar a la vista (puede ser distinta vista que el controlador)
        $this->render("index", array("countries"=>$countries)); // "variable en la vista" => "resultado de la consulta"
    }
    
    //acción
    public function actionCreate(){
        //crear modelo
        $model = new Countries();
        if(isset($_POST["Countries"])){
            //muestra todos los campos -> attributes (Esto para que aparezcan datos y no ingresar todo)
            $model->attributes=$_POST["Countries"];
            if($model->save()){
                Yii::app()->user->setFlash("success", "Country guardado correctamente");
                $this->redirect(array("index"));
            }
        }
        //renderizar
        $this->render("create", array("model"=>$model));  //mandar a la vista create
    }
    
    public function actionUpdate($id){
        //actualizar registro (ya ha sido creado en actionCreate)
        $model = Countries::model()->findByPk($id);
        if(isset($_POST["Countries"])){
            //settear los parametros
            $model->attributes=$_POST["Countries"];
            //actualizar el registro de la base de datos, 
            //si yii ya vio que hay instancia actualiza, si solo se ha inicializado con new country inserta
            if($model->save()){
                //Yii:app()->user->setFlash("success", "Actualizado");
                $this->redirect(array("index"));   
            }
        }
        //renderizar vista update
        $this->render("update", array("model"=>$model));
    }
    
    public function actionDelete($id){
        $model = Countries::model()->deleteByPk($id);
        $this->redirect(array("index")); 
    }
    
    public function actionView($id){
        $model = Countries::model()->findByPk($id);
        $this->render("view", array("model"=>$model));
    }
    
    public function actionEnabled($id){
        $model = Countries::model()->findByPk($id);
        if($model->status==1)
            $model->status=0;
        else
            $model->status=1;
        $model->save();
        $this->redirect(array("index"));
    }
}