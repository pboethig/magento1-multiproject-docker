<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'productalert/product_view', 'name' => 'productalert.price', 'as' => 'productalert_price', 'template' => 'productalert/product/view.phtml'), 'productalert.price', 'alert.urls', array(0 => 'content', 1 => 'product.info')), false);
$this->addItemRelation($item, 'productalert.price');
$this->addItemRelation($item, 'alert.urls');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'preparePriceAlertData'), 'productalert.price', function ($block) { return $block->preparePriceAlertData(); }, array(0 => 'content', 1 => 'product.info', 2 => 'alert.urls')), false);
$this->addItemRelation($item, 'productalert.price');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItemRelation($item, 'alert.urls');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHtmlClass'), 'productalert.price', function ($block) { return $block->setHtmlClass('alert-price link-price-alert'); }, array(0 => 'content', 1 => 'product.info', 2 => 'alert.urls')), false);
$this->addItemRelation($item, 'productalert.price');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItemRelation($item, 'alert.urls');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setSignupLabel', 'translate' => 'value'), 'productalert.price', function ($block) { return $block->setSignupLabel(Mage::helper('core')->__('Sign up for price alert')); }, array(0 => 'content', 1 => 'product.info', 2 => 'alert.urls')), false);
$this->addItemRelation($item, 'productalert.price');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItemRelation($item, 'alert.urls');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'productalert/product_view', 'name' => 'productalert.stock', 'as' => 'productalert_stock', 'template' => 'productalert/product/view.phtml'), 'productalert.stock', 'alert.urls', array(0 => 'content', 1 => 'product.info')), false);
$this->addItemRelation($item, 'productalert.stock');
$this->addItemRelation($item, 'alert.urls');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'prepareStockAlertData'), 'productalert.stock', function ($block) { return $block->prepareStockAlertData(); }, array(0 => 'content', 1 => 'product.info', 2 => 'alert.urls')), false);
$this->addItemRelation($item, 'productalert.stock');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItemRelation($item, 'alert.urls');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHtmlClass'), 'productalert.stock', function ($block) { return $block->setHtmlClass('alert-stock link-stock-alert'); }, array(0 => 'content', 1 => 'product.info', 2 => 'alert.urls')), false);
$this->addItemRelation($item, 'productalert.stock');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItemRelation($item, 'alert.urls');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setSignupLabel', 'translate' => 'value'), 'productalert.stock', function ($block) { return $block->setSignupLabel(Mage::helper('core')->__('Sign up to get notified when this product is back in stock')); }, array(0 => 'content', 1 => 'product.info', 2 => 'alert.urls')), false);
$this->addItemRelation($item, 'productalert.stock');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'product.info');
$this->addItemRelation($item, 'alert.urls');