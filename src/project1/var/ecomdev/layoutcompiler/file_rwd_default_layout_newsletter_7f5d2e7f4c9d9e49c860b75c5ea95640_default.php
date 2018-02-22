<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'newsletter/subscribe', 'name' => 'footer.newsletter', 'as' => 'newsletter', 'before' => 'footer_store_language', 'template' => 'newsletter/subscribe.phtml'), 'footer.newsletter', 'footer', array()), false);
$this->addItemRelation($item, 'footer.newsletter');
$this->addItemRelation($item, 'footer');