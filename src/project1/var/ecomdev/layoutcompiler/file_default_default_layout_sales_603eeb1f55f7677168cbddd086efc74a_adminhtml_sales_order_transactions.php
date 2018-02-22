<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_transactions_grid', 'name' => 'sales_transactions.grid', 'output' => 'toHtml'), 'sales_transactions.grid', null, array()), false);
$this->addItemRelation($item, 'sales_transactions.grid');
$this->addItemRelation($item, NULL);