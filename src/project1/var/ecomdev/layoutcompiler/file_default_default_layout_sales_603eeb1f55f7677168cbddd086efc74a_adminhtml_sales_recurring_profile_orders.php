<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_recurring_profile_view_tab_orders', 'name' => 'sales.recurring.profile.tab.orders', 'output' => 'toHtml'), 'sales.recurring.profile.tab.orders', null, array()), false);
$this->addItemRelation($item, 'sales.recurring.profile.tab.orders');
$this->addItemRelation($item, NULL);