<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_product', 'name' => 'promo_quote_grid', 'output' => 'toHtml'), 'promo_quote_grid', null, array()), false);
$this->addItemRelation($item, 'promo_quote_grid');
$this->addItemRelation($item, NULL);