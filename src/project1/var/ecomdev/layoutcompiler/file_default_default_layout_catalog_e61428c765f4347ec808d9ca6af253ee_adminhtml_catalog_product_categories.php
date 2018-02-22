<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_tab_categories', 'name' => 'catalog.product.edit.tab.categories'), 'catalog.product.edit.tab.categories', 'root', array()), false);
$this->addItemRelation($item, 'catalog.product.edit.tab.categories');
$this->addItemRelation($item, 'root');