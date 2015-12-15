<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Client\Catalog\Model\Exception;

class ProductNotFoundException extends \RuntimeException
{

    public function __construct($id)
    {
        parent::__construct('The product was not found' . PHP_EOL . '[id] ' . $id);
    }

}
