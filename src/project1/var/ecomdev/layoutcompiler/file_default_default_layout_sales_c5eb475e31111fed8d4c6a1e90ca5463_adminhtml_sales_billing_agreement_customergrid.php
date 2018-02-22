<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_customer_edit_tab_agreement', 'name' => 'customer.billing.agreement.grid', 'output' => 'toHtml'), 'customer.billing.agreement.grid', null, array()), false);
$this->addItemRelation($item, 'customer.billing.agreement.grid');
$this->addItemRelation($item, NULL);