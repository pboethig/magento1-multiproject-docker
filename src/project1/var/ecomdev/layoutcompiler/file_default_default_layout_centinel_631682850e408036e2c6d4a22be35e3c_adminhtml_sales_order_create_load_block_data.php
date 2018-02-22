<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'centinel/adminhtml_validation', 'as' => 'card_validation', 'name' => 'card_validation', 'template' => 'sales/order/create/abstract.phtml'), 'card_validation', 'data', array()), false);
$this->addItemRelation($item, 'card_validation');
$this->addItemRelation($item, 'data');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'centinel/adminhtml_validation_form', 'template' => 'centinel/validation/form.phtml', 'name' => 'form'), 'form', 'card_validation', array(0 => 'data')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'card_validation');
$this->addItemRelation($item, 'data');