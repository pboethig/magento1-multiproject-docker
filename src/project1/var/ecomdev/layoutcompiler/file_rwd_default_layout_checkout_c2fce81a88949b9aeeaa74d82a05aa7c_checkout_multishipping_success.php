<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('checkout_multishipping'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/multishipping_success', 'name' => 'checkout_success', 'template' => 'checkout/multishipping/success.phtml'), 'checkout_success', 'content', array()), false);
$this->addItemRelation($item, 'checkout_success');
$this->addItemRelation($item, 'content');