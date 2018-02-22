<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'firegento.index.about', 'template' => 'firegento/debug/index/about.phtml'), 'firegento.index.about', 'content', array()), false);
$this->addItemRelation($item, 'firegento.index.about');
$this->addItemRelation($item, 'content');