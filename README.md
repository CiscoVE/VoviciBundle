Cisco Systems VoviciBundle
============================

## Step 1: Install with composer

```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/CiscoVE/VoviciBundle"
        }
    ],
    "require": {
        "cisco-systems/vovici-bundle": "*"
    }
}
```

## Step 2: Enable the bundle

```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new CiscoSystems\VoviciBundle\CiscoSystemsVoviciBundle(),
    );
}
```

## Step 3: ...
