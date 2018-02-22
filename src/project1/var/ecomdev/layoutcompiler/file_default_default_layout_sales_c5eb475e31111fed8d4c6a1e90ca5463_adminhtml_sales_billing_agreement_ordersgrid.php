<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_billing_agreement_view_tab_orders', 'name' => 'related.orders.grid', 'output' => 'toHtml'), 'related.orders.grid', null, array()), false);
$this->addItemRelation($item, 'related.orders.grid');
$this->addItemRelation($item, NULL);