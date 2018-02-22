<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/system_config_switcher', 'name' => 'adminhtml.system.config.switcher', 'before' => '-'), 'adminhtml.system.config.switcher', 'left', array()), false);
$this->addItemRelation($item, 'adminhtml.system.config.switcher');
$this->addItemRelation($item, 'left');