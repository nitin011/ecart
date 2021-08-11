<?php


namespace App\Interfaces;


use Illuminate\Http\Request;

interface ConfigurationInterface
{
    public function getAllConfigurations();

    public function updateConfigurations(Request $data);

    public function getConfigurationsValues();

    public function getConfigurationData();

    public function getDeliveryCharge();

    public function getVatCharge();

    public function getByIdentifier($identifier);
}
