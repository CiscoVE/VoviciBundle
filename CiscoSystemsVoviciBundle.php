<?php

namespace CiscoSystems\VoviciBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CiscoSystemsVoviciBundle extends Bundle
{
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
    
    public function getPath()
    {
        return strtr(__DIR__, '\\', '/');
    }
}
