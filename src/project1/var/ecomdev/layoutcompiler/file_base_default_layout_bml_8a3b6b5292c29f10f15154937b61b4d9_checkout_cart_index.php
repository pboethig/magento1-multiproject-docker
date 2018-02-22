<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/bml_banners', 'name' => 'bml.center.logo', 'template' => 'paypal/bml.phtml'), 'bml.center.logo', 'top.container', array()), false);
$this->addItemRelation($item, 'bml.center.logo');
$this->addItemRelation($item, 'top.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setSection'), 'bml.center.logo', function ($block) { return $block->setSection('checkout'); }, array(0 => 'top.container')), false);
$this->addItemRelation($item, 'bml.center.logo');
$this->addItemRelation($item, 'top.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setPosition'), 'bml.center.logo', function ($block) { return $block->setPosition('0'); }, array(0 => 'top.container')), false);
$this->addItemRelation($item, 'bml.center.logo');
$this->addItemRelation($item, 'top.container');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/bml_banners', 'name' => 'bml.right.logo', 'after' => 'checkout.cart.methods.onepage.bottom', 'template' => 'paypal/bml.phtml'), 'bml.right.logo', 'checkout.cart.methods', array()), false);
$this->addItemRelation($item, 'bml.right.logo');
$this->addItemRelation($item, 'checkout.cart.methods');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setSection'), 'bml.right.logo', function ($block) { return $block->setSection('checkout'); }, array(0 => 'checkout.cart.methods')), false);
$this->addItemRelation($item, 'bml.right.logo');
$this->addItemRelation($item, 'checkout.cart.methods');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setPosition'), 'bml.right.logo', function ($block) { return $block->setPosition('1'); }, array(0 => 'checkout.cart.methods')), false);
$this->addItemRelation($item, 'bml.right.logo');
$this->addItemRelation($item, 'checkout.cart.methods');