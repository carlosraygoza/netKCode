<?php
#http://localhost/yii/facilito/hola/index
class HolaController extends Controller{
    public function actionIndex(){
        $model = CActiveRecord::model("Users")->findAll(); //hace consulta a la base de datos
        $twitter="@carlozrg";
        $this->render("index", array("model"=>$model, "twitter"=>$twitter)); //manda datos a la vista index
    }
}