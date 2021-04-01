<?php

class RotationBalancerVariant extends AbstractBalancerVariant
{
    private $lastHostKey;

    function chooseHost(): HostInstanceInterface
    {
        $nextHostKey = $this->findNextHostKey();
        return $this->hostsList[$nextHostKey];
    }

    private function findNextHostKey(): int
    {
        if( $this->lastHostKey >  \count($this->hostsList) )
        {
            return 0;
        } else {
            return $this->lastHostKey+1;
        }
    }
}