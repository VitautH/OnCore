<?php
class Oncore_Country_Block_Select extends Mage_Core_Block_Template
{
    public function getCountryArray(){
    $country_array=  Mage::getResourceModel('directory/country_collection')
            ->loadData()
            ->toOptionArray(false);
    return $country_array;
    }


}

