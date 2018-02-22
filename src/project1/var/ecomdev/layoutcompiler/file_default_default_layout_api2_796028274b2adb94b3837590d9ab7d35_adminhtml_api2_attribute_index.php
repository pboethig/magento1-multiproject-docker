<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'api2/adminhtml_attribute', 'name' => 'api2.attribute'), 'api2.attribute', 'content', array()), false);
$this->addItemRelation($item, 'api2.attribute');
$this->addItemRelation($item, 'content');