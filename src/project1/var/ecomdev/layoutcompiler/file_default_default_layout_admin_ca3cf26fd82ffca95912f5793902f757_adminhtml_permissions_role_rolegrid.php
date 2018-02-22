<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_grid_role', 'name' => 'adminhtml.permission.role.grid'), 'adminhtml.permission.role.grid', null, array()), false);
$this->addItemRelation($item, 'adminhtml.permission.role.grid');
$this->addItemRelation($item, NULL);