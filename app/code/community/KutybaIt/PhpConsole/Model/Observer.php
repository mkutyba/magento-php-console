<?php

class KutybaIt_PhpConsole_Model_Observer
{
    public function initPhpConsole()
    {
        Mage::helper('phpconsole')->getPhpConsole()->_init();
    }
}
