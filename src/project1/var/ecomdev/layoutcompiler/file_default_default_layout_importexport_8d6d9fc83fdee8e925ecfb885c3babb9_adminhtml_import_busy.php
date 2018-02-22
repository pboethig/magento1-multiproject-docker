<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'template' => 'importexport/busy.phtml', 'name' => 'busy', 'alias' => 'busy'), 'busy', 'content', array()), false);
$this->addItemRelation($item, 'busy');
$this->addItemRelation($item, 'content');