<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_roles', 'name' => 'adminhtml.permission.role.index', 'template' => 'permissions/roles.phtml'), 'adminhtml.permission.role.index', 'content', array()), false);
$this->addItemRelation($item, 'adminhtml.permission.role.index');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_grid_role', 'name' => 'adminhtml.permission.role.grid', 'as' => 'grid'), 'adminhtml.permission.role.grid', 'adminhtml.permission.role.index', array(0 => 'content')), false);
$this->addItemRelation($item, 'adminhtml.permission.role.grid');
$this->addItemRelation($item, 'adminhtml.permission.role.index');
$this->addItemRelation($item, 'content');