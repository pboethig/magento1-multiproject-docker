<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_block', 'name' => 'cms_block'), 'cms_block', 'content', array()), false);
$this->addItemRelation($item, 'cms_block');
$this->addItemRelation($item, 'content');