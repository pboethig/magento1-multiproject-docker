<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_billing_agreement_grid', 'name' => 'sales.billing.agreement.grid', 'output' => 'toHtml'), 'sales.billing.agreement.grid', null, array()), false);
$this->addItemRelation($item, 'sales.billing.agreement.grid');
$this->addItemRelation($item, NULL);