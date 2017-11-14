<ul>
    <li> sidebar </li>
	<li><?php echo CHtml::link('wiki',array('site/page?view=wiki')); ?></li>
	<li><?php echo CHtml::link('login',array('site/login')); ?></li>
	<li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
	<?php
    /*
	$this->widget('ext.SilcomTreeGridView.SilcomTreeGridView', array(
                'id'=>'your-grid-id',
                'treeViewOptions'=>array(
                    'initialState'=>'collapsed',
                    'expandable'=>true,
                ),
                'parentColumn'=>'parent_id',
                'dataProvider'=>$dataProvider,
                'columns'=>array(
                                     'id',
                                     'name',
                            )
        ));
        */
    ?>
</ul>