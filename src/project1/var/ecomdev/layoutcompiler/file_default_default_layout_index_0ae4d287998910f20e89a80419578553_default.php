<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'index/adminhtml_notifications', 'name' => 'index_notifications', 'template' => 'index/notifications.phtml'), 'index_notifications', 'notifications', array()), false);
$this->addItemRelation($item, 'index_notifications');
$this->addItemRelation($item, 'notifications');