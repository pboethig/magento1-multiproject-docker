<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'moneybookers/jsinit', 'name' => 'moneybookers_jsinit', 'template' => 'moneybookers/jsinit.phtml'), 'moneybookers_jsinit', 'content', array()), false);
$this->addItemRelation($item, 'moneybookers_jsinit');
$this->addItemRelation($item, 'content');