<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_user_edit_tabs', 'name' => 'adminhtml.permissions.user.edit.tabs'), 'adminhtml.permissions.user.edit.tabs', 'left', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.user.edit.tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_user_edit', 'name' => 'adminhtml.permissions.user.edit'), 'adminhtml.permissions.user.edit', 'content', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.user.edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'name' => 'adminhtml.permissions.user.roles.grid.js', 'template' => 'permissions/user_roles_grid_js.phtml'), 'adminhtml.permissions.user.roles.grid.js', 'js', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.user.roles.grid.js');
$this->addItemRelation($item, 'js');