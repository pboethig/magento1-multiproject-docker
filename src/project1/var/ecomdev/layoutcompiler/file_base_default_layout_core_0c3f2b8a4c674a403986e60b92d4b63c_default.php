<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('name' => 'formkey', 'type' => 'core/template', 'template' => 'core/formkey.phtml'), 'formkey', null, array()), false);
$this->addItemRelation($item, 'formkey');
$this->addItemRelation($item, NULL);