<?php namespace Econtract\Compare\ServiceProviders;


class SupplierServiceProvider extends BaseServiceProvider {

    public function getSuppliers($params, $supplierIds = array())
    {
        $suppliers = $this->getApiClient()->getSuppliers( $params, $supplierIds );

        return $suppliers;
    }

    public function getSupplier($params, $supplierId)
    {
        $suppliers = $this->getApiClient()->getSuppliers( $params, $supplierId );

        return substr($suppliers, 1, -1);
    }

}