<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_variable_edit', 'name' => 'adminhtml.permissions.variable.edit'), 'adminhtml.permissions.variable.edit', 'content', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.variable.edit');
$this->addItemRelation($item, 'content');