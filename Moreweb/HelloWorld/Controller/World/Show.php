<?php

namespace Moreweb\HelloWorld\Controller\World;

class Show extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context
    )
    {
        return parent::__construct($context);
    }

    public function execute()
    {
        echo 'Hello World';
        exit;
    }
}
