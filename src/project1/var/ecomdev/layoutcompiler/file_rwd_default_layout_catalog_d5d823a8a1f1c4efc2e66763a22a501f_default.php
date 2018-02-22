<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_compare_sidebar', 'before' => 'cart_sidebar', 'name' => 'catalog.compare.sidebar', 'template' => 'catalog/product/compare/sidebar.phtml'), 'catalog.compare.sidebar', 'right', array()), false);
$this->addItemRelation($item, 'catalog.compare.sidebar');
$this->addItemRelation($item, 'right');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label title', 'module' => 'catalog', 'ifconfig' => 'catalog/seo/site_map'), 'footer_links', function ($block) { return $block->addLink(Mage::helper('catalog')->__('Site Map'), Mage::helper('catalog/map')->getCategoryUrl(), Mage::helper('catalog')->__('Site Map')); }, array()), false);
$this->addItemRelation($item, 'footer_links');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_price_template', 'name' => 'catalog_product_price_template'), 'catalog_product_price_template', null, array()), false);
$this->addItemRelation($item, 'catalog_product_price_template');
$this->addItemRelation($item, NULL);