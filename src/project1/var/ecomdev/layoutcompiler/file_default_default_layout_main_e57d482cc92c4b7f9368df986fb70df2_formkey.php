<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'formkey', 'as' => 'formkey', 'template' => 'formkey.phtml'), 'formkey', null, array()), false);
$this->addItemRelation($item, 'formkey');
$this->addItemRelation($item, NULL);