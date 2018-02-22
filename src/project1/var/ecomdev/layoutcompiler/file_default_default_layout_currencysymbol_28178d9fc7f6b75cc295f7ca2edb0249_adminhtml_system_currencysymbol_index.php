<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'currencysymbol/adminhtml_system_currencysymbol', 'name' => 'mage.system.currencysymbol', 'template' => 'currencysymbol/grid.phtml'), 'mage.system.currencysymbol', 'content', array()), false);
$this->addItemRelation($item, 'mage.system.currencysymbol');
$this->addItemRelation($item, 'content');