<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'product.info.addtocart.paypal.wrapper', 'translate' => 'label'), 'product.info.addtocart.paypal.wrapper', 'product.info.addtocart', array()), false);
$this->addItemRelation($item, 'product.info.addtocart.paypal.wrapper');
$this->addItemRelation($item, 'product.info.addtocart');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setMayBeInvisible'), 'product.info.addtocart.paypal.wrapper', function ($block) { return $block->setMayBeInvisible('true'); }, array(0 => 'product.info.addtocart')), false);
$this->addItemRelation($item, 'product.info.addtocart.paypal.wrapper');
$this->addItemRelation($item, 'product.info.addtocart');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/express_shortcut', 'name' => 'product.info.addtocart.paypal', 'template' => 'paypal/express/product/shortcut.phtml'), 'product.info.addtocart.paypal', 'product.info.addtocart.paypal.wrapper', array(0 => 'product.info.addtocart')), false);
$this->addItemRelation($item, 'product.info.addtocart.paypal');
$this->addItemRelation($item, 'product.info.addtocart.paypal.wrapper');
$this->addItemRelation($item, 'product.info.addtocart');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setIsInCatalogProduct'), 'product.info.addtocart.paypal', function ($block) { return $block->setIsInCatalogProduct('1'); }, array(0 => 'product.info.addtocart', 1 => 'product.info.addtocart.paypal.wrapper')), false);
$this->addItemRelation($item, 'product.info.addtocart.paypal');
$this->addItemRelation($item, 'product.info.addtocart');
$this->addItemRelation($item, 'product.info.addtocart.paypal.wrapper');
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('SHORTCUT_popup'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/logo', 'name' => 'paypal.partner.right.logo', 'template' => 'paypal/partner/logo.phtml'), 'paypal.partner.right.logo', 'right', array()), false);
$this->addItemRelation($item, 'paypal.partner.right.logo');
$this->addItemRelation($item, 'right');