<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'product_tabs', function ($block) { return $block->addTab('configurable', 'adminhtml/catalog_product_edit_tab_super_config'); }, array()), false);
$this->addItemRelation($item, 'product_tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'bindShadowTabs'), 'product_tabs', function ($block) { return $block->bindShadowTabs('configurable', 'customer_options'); }, array()), false);
$this->addItemRelation($item, 'product_tabs');