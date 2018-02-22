<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/permissions_block_edit', 'name' => 'adminhtml.permissions.block.edit'), 'adminhtml.permissions.block.edit', 'content', array()), false);
$this->addItemRelation($item, 'adminhtml.permissions.block.edit');
$this->addItemRelation($item, 'content');