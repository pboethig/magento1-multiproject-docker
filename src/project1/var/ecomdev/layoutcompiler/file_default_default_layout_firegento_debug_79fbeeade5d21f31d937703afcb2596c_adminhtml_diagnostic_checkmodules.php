<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'firegento/diagnostic_checkModules', 'name' => 'firegento.diagnostic.checkmodules'), 'firegento.diagnostic.checkmodules', 'content', array()), false);
$this->addItemRelation($item, 'firegento.diagnostic.checkmodules');
$this->addItemRelation($item, 'content');