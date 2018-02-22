<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_billing_agreement', 'name' => 'sales.billing.agreement.grid.container'), 'sales.billing.agreement.grid.container', 'content', array()), false);
$this->addItemRelation($item, 'sales.billing.agreement.grid.container');
$this->addItemRelation($item, 'content');