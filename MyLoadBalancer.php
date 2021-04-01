<?php

class MyLoadBalancer
{
    private $hostInstances;

    private $balancerVariant;

    public function __construct(HostInstanceInterface $hostInstances, BalancerVariantInterface $balancerVariant)
    {
        $this->balancerVariant = $balancerVariant;
        $this->hostInstances = $hostInstances;
    }

    public function handleRequest(Request $request)
    {
        $host = $this->balancerVariant->chooseHost();
        $host->handleRequst($request);
    }
}