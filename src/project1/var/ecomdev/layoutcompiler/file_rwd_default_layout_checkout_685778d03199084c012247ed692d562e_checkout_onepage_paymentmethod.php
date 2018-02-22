<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/onepage_payment_methods', 'name' => 'root', 'output' => 'toHtml', 'template' => 'checkout/onepage/payment/methods.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setMethodFormTemplate'), 'root', function ($block) { return $block->setMethodFormTemplate('purchaseorder', 'payment/form/purchaseorder.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'checkout.onepage.payment.methods.scripts', 'as' => 'scripts'), 'checkout.onepage.payment.methods.scripts', 'root', array()), false);
$this->addItemRelation($item, 'checkout.onepage.payment.methods.scripts');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'checkout.onepage.payment.methods.additional', 'as' => 'additional'), 'checkout.onepage.payment.methods.additional', 'root', array()), false);
$this->addItemRelation($item, 'checkout.onepage.payment.methods.additional');
$this->addItemRelation($item, 'root');