<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tax/adminhtml_notifications', 'name' => 'tax_notifications', 'template' => 'tax/notifications.phtml'), 'tax_notifications', 'notifications', array()), false);
$this->addItemRelation($item, 'tax_notifications');
$this->addItemRelation($item, 'notifications');