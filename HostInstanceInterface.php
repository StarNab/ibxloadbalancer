<?php

interface HostInstanceInterface
{
    public function getLoad(): float;
    public function handleRequest(Request $request): void;
}