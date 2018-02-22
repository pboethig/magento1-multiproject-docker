<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'product_tabs', function ($block) { return $block->addTab('bundle_items', 'bundle/adminhtml_catalog_product_edit_tab_bundle'); }, array()), false);
$this->addItemRelation($item, 'product_tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'bindShadowTabs'), 'product_tabs', function ($block) { return $block->bindShadowTabs('bundle_items', 'customer_options'); }, array()), false);
$this->addItemRelation($item, 'product_tabs');