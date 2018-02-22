<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'api2/adminhtml_permissions_user_edit_tab_roles', 'name' => 'adminhtml.permissions.user.edit.tab.roles'), 'adminhtml.permissions.user.edit.tab.roles', 'adminhtml.permissions.user.edit.tabs', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.user.edit.tab.roles');
$this->addItemRelation($item, 'adminhtml.permissions.user.edit.tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTabAfter'), 'adminhtml.permissions.user.edit.tabs', function ($block) { return $block->addTabAfter('api2_roles_section', 'adminhtml.permissions.user.edit.tab.roles', 'roles_section'); }, array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.user.edit.tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'name' => 'adminhtml.permissions.user.edit.tab.roles.js', 'template' => 'api2/permissions/user/edit/tab/roles/js.phtml'), 'adminhtml.permissions.user.edit.tab.roles.js', 'js', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.user.edit.tab.roles.js');
$this->addItemRelation($item, 'js');