<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('SHORTCUT_popup'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/logo', 'name' => 'paypal.partner.right.logo', 'template' => 'paypal/partner/logo.phtml'), 'paypal.partner.right.logo', 'right', array()), false);
$this->addItemRelation($item, 'paypal.partner.right.logo');
$this->addItemRelation($item, 'right');