<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_search_edit', 'name' => 'catalog_search_edit'), 'catalog_search_edit', 'content', array()), false);
$this->addItemRelation($item, 'catalog_search_edit');
$this->addItemRelation($item, 'content');