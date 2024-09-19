<?php

namespace Luminar\Console;

use Exception;
use Symfony\Component\Console\Application;

class Console
{
    /**
     * @var Application $application
     */
    protected Application $application;

    public function __construct()
    {
        $this->application = new Application();
    }

    /**
     * @param array $commands
     * @return void
     */
    public function registerCommands(array $commands): void
    {
        foreach($commands as $command) {
            $this->application->add($command);
        }
    }

    /**
     * @return void
     * @throws Exception
     */
    public function create(): void
    {
        $this->application->run();
    }
}