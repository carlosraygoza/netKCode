<?php

Yii::import('zii.widgets.CPortlet');

class UserMenu extends CPortlet
{
    
	public function init()
	{
		$this->title=CHtml::encode(Yii::app()->user->name);
		parent::init();
	}
    
	protected function renderContent()
	{
		$this->render('userMenu');
        // render the view of the tree
        //$this->render('application.views.tree.tree1');
	}
}