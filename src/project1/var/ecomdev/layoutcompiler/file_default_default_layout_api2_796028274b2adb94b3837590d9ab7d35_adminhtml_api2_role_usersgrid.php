<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'api2/adminhtml_roles_tab_users', 'name' => 'adminhtml.role.edit.tab.users', 'output' => 'toHtml'), 'adminhtml.role.edit.tab.users', null, array()), false);
$this->addItemRelation($item, 'adminhtml.role.edit.tab.users');
$this->addItemRelation($item, NULL);