<div class="panel panel-default" id="conversejs_xmpp_messenger-panel">

    <!-- Display panel menu widget -->
    <?php $this->widget('application.widgets.PanelMenuWidget', array('id' => 'conversejs_xmpp_messenger-panel')); ?>

	<div class="panel-heading">
        <?php echo Yii::t('Converse_Xmpp_MessengerModule.base', '<strong>Most</strong> active people'); ?>
    </div>
	<div class="panel-body">
        <?php


            // Button Get a list of most active users
            echo CHtml::link(Yii::t('Converse_Xmpp_MessengerModule.base', 'Get a list'), $this->createUrl('//mostactiveusers/mostActiveUsers/list'), array(
                'class' => 'btn btn-info',
                'data-toggle' => 'modal',
                'data-target' => '#globalModal'
            ));

        ?>
    </div>
</div>

