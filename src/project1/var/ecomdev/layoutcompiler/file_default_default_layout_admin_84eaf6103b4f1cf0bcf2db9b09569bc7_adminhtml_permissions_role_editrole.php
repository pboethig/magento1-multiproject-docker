<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_editroles', 'name' => 'adminhtml.permissions.editroles'), 'adminhtml.permissions.editroles', 'left', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.editroles');
$this->addItemRelation($item, 'left');