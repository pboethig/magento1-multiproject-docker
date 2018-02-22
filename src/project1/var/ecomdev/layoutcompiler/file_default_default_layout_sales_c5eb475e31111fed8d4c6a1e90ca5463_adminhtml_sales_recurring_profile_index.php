<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_recurring_profile', 'name' => 'sales.recurring.profile.grid.container'), 'sales.recurring.profile.grid.container', 'content', array()), false);
$this->addItemRelation($item, 'sales.recurring.profile.grid.container');
$this->addItemRelation($item, 'content');