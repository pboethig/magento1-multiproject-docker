<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/iframe', 'name' => 'paypal.iframe'), 'paypal.iframe', 'checkout.onepage.review.info.items.after', array()), false);
$this->addItemRelation($item, 'paypal.iframe');
$this->addItemRelation($item, 'checkout.onepage.review.info.items.after');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'checkout.onepage.review.button', function ($block) { return $block->setTemplate(Mage::helper('paypal/hss')->getReviewButtonTemplate('paypal/hss/review/button.phtml', 'checkout.onepage.review.button')); }, array()), false);
$this->addItemRelation($item, 'checkout.onepage.review.button');