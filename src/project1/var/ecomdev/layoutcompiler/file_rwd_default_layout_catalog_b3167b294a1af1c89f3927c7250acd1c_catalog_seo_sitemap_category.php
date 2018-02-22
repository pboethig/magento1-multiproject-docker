<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle', 'translate' => 'title', 'module' => 'catalog'), 'head', function ($block) { return $block->setTitle(Mage::helper('catalog')->__('Site Map')); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('catalog_seo_sitemap'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle', 'translate' => 'title', 'module' => 'catalog'), 'seo.sitemap.container', function ($block) { return $block->setTitle(Mage::helper('catalog')->__('Categories')); }, array()), false);
$this->addItemRelation($item, 'seo.sitemap.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/seo_sitemap_category', 'name' => 'seo.sitemap.sitemap', 'as' => 'sitemap', 'after' => 'pager_top', 'template' => 'catalog/seo/sitemap.phtml'), 'seo.sitemap.sitemap', 'seo.sitemap.container', array()), false);
$this->addItemRelation($item, 'seo.sitemap.sitemap');
$this->addItemRelation($item, 'seo.sitemap.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'bindPager'), 'seo.sitemap.sitemap', function ($block) { return $block->bindPager('seo.sitemap.pager.top'); }, array(0 => 'seo.sitemap.container')), false);
$this->addItemRelation($item, 'seo.sitemap.sitemap');
$this->addItemRelation($item, 'seo.sitemap.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'bindPager'), 'seo.sitemap.sitemap', function ($block) { return $block->bindPager('seo.sitemap.pager.bottom'); }, array(0 => 'seo.sitemap.container')), false);
$this->addItemRelation($item, 'seo.sitemap.sitemap');
$this->addItemRelation($item, 'seo.sitemap.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setItemsTitle', 'translate' => 'title', 'module' => 'catalog'), 'seo.sitemap.sitemap', function ($block) { return $block->setItemsTitle(Mage::helper('catalog')->__('categories')); }, array(0 => 'seo.sitemap.container')), false);
$this->addItemRelation($item, 'seo.sitemap.sitemap');
$this->addItemRelation($item, 'seo.sitemap.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label title', 'module' => 'catalog'), 'seo.sitemap.links', function ($block) { return $block->addLink(Mage::helper('catalog')->__('Products Sitemap'), Mage::helper('catalog/map')->getProductUrl(), Mage::helper('catalog')->__('Products Sitemap')); }, array()), false);
$this->addItemRelation($item, 'seo.sitemap.links');