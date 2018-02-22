<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_tab_upsell', 'name' => 'catalog.product.edit.tab.upsell'), 'catalog.product.edit.tab.upsell', 'root', array()), false);
$this->addItemRelation($item, 'catalog.product.edit.tab.upsell');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/widget_grid_serializer', 'name' => 'upsell_grid_serializer'), 'upsell_grid_serializer', 'root', array()), false);
$this->addItemRelation($item, 'upsell_grid_serializer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'initSerializerBlock'), 'upsell_grid_serializer', function ($block) { return $block->initSerializerBlock('catalog.product.edit.tab.upsell', 'getSelectedUpsellProducts', 'links[upsell]', 'products_upsell'); }, array(0 => 'root', 1 => 'upsell_grid_serializer')), false);
$this->addItemRelation($item, 'upsell_grid_serializer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnInputName'), 'upsell_grid_serializer', function ($block) { return $block->addColumnInputName('position'); }, array(0 => 'root', 1 => 'upsell_grid_serializer')), false);
$this->addItemRelation($item, 'upsell_grid_serializer');
$this->addItemRelation($item, 'root');