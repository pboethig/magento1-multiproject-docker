<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/hosted_pro_iframe', 'name' => 'hosted.pro.iframe', 'template' => 'paypal/hss/form.phtml'), 'hosted.pro.iframe', null, array()), false);
$this->addItemRelation($item, 'hosted.pro.iframe');
$this->addItemRelation($item, NULL);