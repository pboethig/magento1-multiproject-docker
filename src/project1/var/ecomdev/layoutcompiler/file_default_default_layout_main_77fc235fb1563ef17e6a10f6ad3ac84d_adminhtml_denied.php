<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/denied', 'name' => 'content.denied', 'template' => 'access_denied.phtml'), 'content.denied', 'content', array()), false);
$this->addItemRelation($item, 'content.denied');
$this->addItemRelation($item, 'content');