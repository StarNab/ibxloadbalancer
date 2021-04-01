<?php

abstract class AbstractBalancerVariant implements BalancerVariantInterface
{
    protected $hostsList;
    public function setHostList(array $hosts)
    {
        $this->hostsList = $hosts;
    }
}