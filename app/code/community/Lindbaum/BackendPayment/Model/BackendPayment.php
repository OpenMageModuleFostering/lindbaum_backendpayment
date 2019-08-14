<?php

class Lindbaum_BackendPayment_Model_BackendPayment extends Mage_Payment_Model_Method_Abstract
{
protected $_code = 'backendpayment';
protected $_canUseInternal = true;
protected $_canUseCheckout = false;
protected $_canUseForMultishipping  = false;

public function __construct()
    {
        parent::__construct();
    }
}