<?php

class LowestLoadBalancerVariant extends AbstractBalancerVariant
{
    const MAX_HOST_LOAD = 0.75;

    function chooseHost(): HostInstance
    {
        // Find the first host with current load below MAX_HOST_LOAD
        $currentLowestLoad = null;
        $currentLowestLoadHost = null;
        foreach( $this->hostList as $host )
        {
            // Register the host with lowest load
            if( $currentLowestLoad === null || $host->getLoad() < $currentLowestLoad )
            {
                $currentLowestLoad = $host->getLoad();
                $currentLowestLoadHost = $host;
            }
            // First host below the threshold will do
            if( $host->getLoad() < self::MAX_HOST_LOAD )
            {
                return $host;
            }
        }

        return $currentLowestLoadHost;
    }
}