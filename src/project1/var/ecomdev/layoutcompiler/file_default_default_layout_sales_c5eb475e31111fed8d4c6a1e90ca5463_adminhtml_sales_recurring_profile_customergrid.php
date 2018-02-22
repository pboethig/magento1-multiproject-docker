<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_customer_edit_tab_recurring_profile', 'name' => 'customer.recurring.profile.grid', 'output' => 'toHtml'), 'customer.recurring.profile.grid', null, array()), false);
$this->addItemRelation($item, 'customer.recurring.profile.grid');
$this->addItemRelation($item, NULL);