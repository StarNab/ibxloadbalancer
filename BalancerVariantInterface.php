<?php

interface BalancerVariantInterface
{
    public function setHostList(array $hosts);
    public function chooseHost(): AbstractHostInstance;
}
