<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'name' => 'content', 'template' => 'forgotpassword.phtml'), 'content', 'root', array()), false);
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'form.additional.info'), 'form.additional.info', 'content', array(0 => 'root')), false);
$this->addItemRelation($item, 'form.additional.info');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'root');