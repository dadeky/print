<?php
namespace Printing\Domain\Exception;

use Dadeky\Ddd\Domain\Exception\DomainException;

class PrintServiceDoesNotExistException extends DomainException
{
    private $defaultMessage = 'Print service: %1$s does not exist.';
    
    public function __construct($printServiceName, $message=null)
    {
        parent::__construct((null === $message) ? $this->defaultMessage : $message, [$printServiceName]);
    }
}