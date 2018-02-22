<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'firegento/diagnostic_checkEvents', 'name' => 'firegento.diagnostic.checkevents'), 'firegento.diagnostic.checkevents', 'content', array()), false);
$this->addItemRelation($item, 'firegento.diagnostic.checkevents');
$this->addItemRelation($item, 'content');