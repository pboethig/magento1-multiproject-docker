<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'centinel/authentication_complete', 'name' => 'root', 'output' => 'toHtml', 'template' => 'centinel/authentication/complete.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);