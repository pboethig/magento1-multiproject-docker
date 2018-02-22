<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cache', 'name' => 'cache'), 'cache', 'content', array()), false);
$this->addItemRelation($item, 'cache');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cache_additional', 'name' => 'cache.additional', 'template' => 'system/cache/additional.phtml'), 'cache.additional', 'content', array()), false);
$this->addItemRelation($item, 'cache.additional');
$this->addItemRelation($item, 'content');