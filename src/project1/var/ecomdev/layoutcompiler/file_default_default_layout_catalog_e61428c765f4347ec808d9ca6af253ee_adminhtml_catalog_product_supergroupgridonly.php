<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_tab_super_group', 'name' => 'catalog.product.edit.tab.super.group'), 'catalog.product.edit.tab.super.group', 'root', array()), false);
$this->addItemRelation($item, 'catalog.product.edit.tab.super.group');
$this->addItemRelation($item, 'root');