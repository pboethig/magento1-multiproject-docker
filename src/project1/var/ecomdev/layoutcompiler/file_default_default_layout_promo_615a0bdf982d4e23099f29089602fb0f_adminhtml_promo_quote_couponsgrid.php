<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_coupons_grid', 'name' => 'promo_quote_edit_tab_coupons_grid'), 'promo_quote_edit_tab_coupons_grid', 'root', array()), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_coupons_grid');
$this->addItemRelation($item, 'root');