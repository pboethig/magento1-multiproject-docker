<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypaluk/express_shortcut', 'name' => 'paypaluk.partner.top_cart.shortcut', 'template' => 'paypal/express/shortcut.phtml'), 'paypaluk.partner.top_cart.shortcut', 'topCart.extra_actions', array()), false);
$this->addItemRelation($item, 'paypaluk.partner.top_cart.shortcut');
$this->addItemRelation($item, 'topCart.extra_actions');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypaluk/express_shortcut', 'name' => 'paypaluk.partner.cart_sidebar.shortcut', 'template' => 'paypal/express/shortcut.phtml'), 'paypaluk.partner.cart_sidebar.shortcut', 'cart_sidebar.extra_actions', array()), false);
$this->addItemRelation($item, 'paypaluk.partner.cart_sidebar.shortcut');
$this->addItemRelation($item, 'cart_sidebar.extra_actions');