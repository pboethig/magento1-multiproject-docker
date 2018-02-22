<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote', 'name' => 'promo_quote'), 'promo_quote', 'content', array()), false);
$this->addItemRelation($item, 'promo_quote');
$this->addItemRelation($item, 'content');