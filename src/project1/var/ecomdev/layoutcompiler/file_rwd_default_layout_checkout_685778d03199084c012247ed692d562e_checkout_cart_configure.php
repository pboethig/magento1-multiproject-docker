<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('catalog_product_view'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/cart_item_configure', 'name' => 'checkout.cart.item.configure.block'), 'checkout.cart.item.configure.block', 'product.info', array()), false);
$this->addItemRelation($item, 'checkout.cart.item.configure.block');
$this->addItemRelation($item, 'product.info');