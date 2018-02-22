<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_attribute_edit_tabs', 'name' => 'attribute_edit_tabs'), 'attribute_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'attribute_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_attribute_edit', 'name' => 'attribute_edit_content'), 'attribute_edit_content', 'content', array()), false);
$this->addItemRelation($item, 'attribute_edit_content');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'name' => 'attribute_edit_js', 'template' => 'catalog/product/attribute/js.phtml'), 'attribute_edit_js', 'js', array()), false);
$this->addItemRelation($item, 'attribute_edit_js');
$this->addItemRelation($item, 'js');