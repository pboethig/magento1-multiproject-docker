<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'product.info.addtocart.paypaluk.wrapper', 'translate' => 'label'), 'product.info.addtocart.paypaluk.wrapper', 'product.tooltip', array()), false);
$this->addItemRelation($item, 'product.info.addtocart.paypaluk.wrapper');
$this->addItemRelation($item, 'product.tooltip');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypaluk/express_shortcut', 'name' => 'product.info.addtocart.paypaluk', 'template' => 'paypal/express/shortcut.phtml'), 'product.info.addtocart.paypaluk', 'product.info.addtocart.paypaluk.wrapper', array(0 => 'product.tooltip')), false);
$this->addItemRelation($item, 'product.info.addtocart.paypaluk');
$this->addItemRelation($item, 'product.info.addtocart.paypaluk.wrapper');
$this->addItemRelation($item, 'product.tooltip');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setIsInCatalogProduct'), 'product.info.addtocart.paypaluk', function ($block) { return $block->setIsInCatalogProduct('1'); }, array(0 => 'product.tooltip', 1 => 'product.info.addtocart.paypaluk.wrapper')), false);
$this->addItemRelation($item, 'product.info.addtocart.paypaluk');
$this->addItemRelation($item, 'product.tooltip');
$this->addItemRelation($item, 'product.info.addtocart.paypaluk.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setShowOrPosition'), 'product.info.addtocart.paypaluk', function ($block) { return $block->setShowOrPosition('after'); }, array(0 => 'product.tooltip', 1 => 'product.info.addtocart.paypaluk.wrapper')), false);
$this->addItemRelation($item, 'product.info.addtocart.paypaluk');
$this->addItemRelation($item, 'product.tooltip');
$this->addItemRelation($item, 'product.info.addtocart.paypaluk.wrapper');