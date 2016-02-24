<?php namespace Econtract\AanbiedersApi\Traits;


use Econtract\AanbiedersApi\Services\Api\ProductServiceProvider;
use Econtract\AanbiedersApi\Exceptions\AanbiedersApiException;

trait ProductTrait {

    /**
     * @param array $params
     * @param array $productIds
     * @return \stdClass
     * @throws AanbiedersApiException
     */
    public function getProducts($params, $productIds = array())
    {
        return $this->returnIfSuccessful(
            $this->getProductServiceProvider()->getProducts( $params, $productIds )
        );
    }

    /**
     * @param array $params
     * @param int $productId
     * @return \stdClass
     * @throws AanbiedersApiException
     */
    public function getProduct($params, $productId)
    {
        return $this->returnIfSuccessful(
            $this->getProductServiceProvider()->getProduct( $params, $productId )
        );
    }


    /**
     * @return ProductServiceProvider
     */
    protected function getProductServiceProvider()
    {
        if( is_null($this->productServiceProvider) ) {
            $this->productServiceProvider = new ProductServiceProvider();
        }

        return $this->productServiceProvider;
    }

}