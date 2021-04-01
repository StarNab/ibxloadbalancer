<?php

abstract class AbstractHostInstance implements HostInstanceInterface
{
    function getLoad(): float
    {
        // TODO: Implement getLoad() method.
    }

    public function handleRequest(Request $request): void
    {
        // TODO: Implement handleRequest() method.
    }
}