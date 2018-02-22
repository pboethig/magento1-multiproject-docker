<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_product_grid', 'name' => 'adminhtml.tag.product.grid'), 'adminhtml.tag.product.grid', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.tag.product.grid');
$this->addItemRelation($item, 'root');