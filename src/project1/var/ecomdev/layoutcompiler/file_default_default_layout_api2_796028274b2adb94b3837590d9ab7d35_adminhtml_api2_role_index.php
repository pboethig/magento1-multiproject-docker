<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'api2/adminhtml_roles', 'name' => 'api2_roles'), 'api2_roles', 'content', array()), false);
$this->addItemRelation($item, 'api2_roles');
$this->addItemRelation($item, 'content');