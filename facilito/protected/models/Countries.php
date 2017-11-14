<?php
class Countries extends CActiveRecord
{
    //metodo estático que ayudará a hacer consultas en el modelo
    public static function model($className=__CLASS__){
        //llamar al padre CActiveRecords, acepta un string con el nombre del modelo
        return parent::model($className);
    }
    
    //nombre de tabla para que yii sepa a donde apuntará
    public function tableName(){
        //usar el nombre del modelo en la tabla pero en minusculas
        return 'countries';
    }
    //reglas de validación
    public function rules(){
        return array(
            //numero de reglas (con array de campos de la tabla)
            //ID no se le agregan reglas de validación aqui
            array('name, status', 'required'),
        );
    }
}
