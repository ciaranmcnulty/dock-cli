<?php

namespace Dock\Installer;

use SRIO\ChainOfResponsibility\ChainContext;
use SRIO\ChainOfResponsibility\ChainProcessInterface;

abstract class InstallerTask implements ChainProcessInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(ChainContext $context)
    {
        $this->run();
    }

    abstract public function run();
}
