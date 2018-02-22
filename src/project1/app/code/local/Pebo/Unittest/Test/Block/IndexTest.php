<?php

class Pebo_Unittest_Test_Block_IndexTest extends EcomDev_PHPUnit_Test_Case
{
    /**
     * Product price calculation test
     *
     * @test
     * @loadFixture
     * @doNotIndexAll
     */
    public function priceCalculation($entity_id, $storeId)
    {
        $storeId = Mage::app()->getStore($storeId)->getId();
        /* @var $product Mage_Catalog_Model_Product */
        $product = Mage::getModel('catalog/product')
            ->setStoreId($storeId)
            ->load($productId);

        $this->assertNull($product->getId());
    }
}
