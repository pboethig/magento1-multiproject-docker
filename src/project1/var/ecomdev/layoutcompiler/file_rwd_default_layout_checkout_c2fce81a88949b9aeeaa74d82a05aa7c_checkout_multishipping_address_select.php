<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('checkout_multishipping'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/multishipping_address_select', 'name' => 'checkout_address_select', 'template' => 'checkout/multishipping/address/select.phtml'), 'checkout_address_select', 'content', array()), false);
$this->addItemRelation($item, 'checkout_address_select');
$this->addItemRelation($item, 'content');