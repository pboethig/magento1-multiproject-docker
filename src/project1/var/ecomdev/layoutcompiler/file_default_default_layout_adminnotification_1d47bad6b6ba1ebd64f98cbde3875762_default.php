<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/notification_toolbar', 'name' => 'notification_toolbar', 'as' => 'notification_toolbar', 'acl' => 'system/adminnotification/show_toolbar', 'template' => 'notification/toolbar.phtml'), 'notification_toolbar', 'notifications', array()), false);
$this->addItemRelation($item, 'notification_toolbar');
$this->addItemRelation($item, 'notifications');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/notification_window', 'name' => 'notification_window', 'as' => 'notification_window', 'acl' => 'system/adminnotification/show_toolbar', 'template' => 'notification/window.phtml'), 'notification_window', 'notifications', array()), false);
$this->addItemRelation($item, 'notification_window');
$this->addItemRelation($item, 'notifications');