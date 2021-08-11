<?php


namespace App\Interfaces\Customer;


use App\User;
use Illuminate\Http\Request;

interface CustomerInterface
{
    public function getAll();

    public function updateProfile($data, $userId);

    public function getTotalCustomerCount();

    public function getRepeatedCustomerCount();

    public function searchCustomer($query);

    public function getById($id);

    public function sendWelcomeEmailToCustomer(User $user);
}
