<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_transactions', 'name' => 'sales_transactions.grid.container'), 'sales_transactions.grid.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_transactions.grid.container');
$this->addItemRelation($item, 'content');