<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page', 'name' => 'cms_page'), 'cms_page', 'content', array()), false);
$this->addItemRelation($item, 'cms_page');
$this->addItemRelation($item, 'content');