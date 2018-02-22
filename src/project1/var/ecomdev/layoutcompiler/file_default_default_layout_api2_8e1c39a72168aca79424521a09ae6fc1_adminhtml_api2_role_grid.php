<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'api2/adminhtml_roles_grid', 'name' => 'api2_roles.grid', 'output' => 'toHtml'), 'api2_roles.grid', null, array()), false);
$this->addItemRelation($item, 'api2_roles.grid');
$this->addItemRelation($item, NULL);