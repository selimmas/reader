<?php

declare(strict_types = 1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReadCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:read';

    protected function configure()
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}