<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('editor'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_block_edit', 'name' => 'cms_block_edit'), 'cms_block_edit', 'content', array()), false);
$this->addItemRelation($item, 'cms_block_edit');
$this->addItemRelation($item, 'content');