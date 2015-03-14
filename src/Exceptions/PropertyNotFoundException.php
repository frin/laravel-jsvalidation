<?php namespace Proengsoft\JQueryValidation\Exceptions;

use Exception;

class PropertyNotFoundException extends Exception {


    public function __construct($property = "", $caller="", Exception $previous = null)
    {
        $message="'$property' not found in '$caller'' object";
        parent::__construct($message, 0, $previous); // TODO: Change the autogenerated stub
    }


}