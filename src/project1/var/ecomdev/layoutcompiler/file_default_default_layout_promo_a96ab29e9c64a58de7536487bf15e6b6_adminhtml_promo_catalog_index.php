<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog', 'name' => 'promo_catalog'), 'promo_catalog', 'content', array()), false);
$this->addItemRelation($item, 'promo_catalog');
$this->addItemRelation($item, 'content');