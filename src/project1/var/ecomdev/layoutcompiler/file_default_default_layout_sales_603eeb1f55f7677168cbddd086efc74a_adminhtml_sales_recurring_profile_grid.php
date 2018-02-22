<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_recurring_profile_grid', 'name' => 'sales.recurring.profile.grid', 'output' => 'toHtml'), 'sales.recurring.profile.grid', null, array()), false);
$this->addItemRelation($item, 'sales.recurring.profile.grid');
$this->addItemRelation($item, NULL);