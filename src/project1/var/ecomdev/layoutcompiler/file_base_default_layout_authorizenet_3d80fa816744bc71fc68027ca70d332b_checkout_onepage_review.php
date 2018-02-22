<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'directpost/form', 'name' => 'payment.form.directpost', 'template' => 'authorizenet/directpost/form.phtml'), 'payment.form.directpost', 'checkout.onepage.review.info.items.after', array()), false);
$this->addItemRelation($item, 'payment.form.directpost');
$this->addItemRelation($item, 'checkout.onepage.review.info.items.after');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setMethodInfo'), 'payment.form.directpost', function ($block) { return $block->setMethodInfo(); }, array(0 => 'checkout.onepage.review.info.items.after')), false);
$this->addItemRelation($item, 'payment.form.directpost');
$this->addItemRelation($item, 'checkout.onepage.review.info.items.after');