<?php

namespace Baton;

use Composer\Script\ScriptEvents;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Plugin\PluginInterface;

class Baton implements EventSubscriberInterface, PluginInterface
{
    public function activate(Composer $composer, IOInterface $io): void
    {
        $io->write('Welcome to Baton!');
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        $io->write('Goodbye to Baton!');
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        $io->write('Thanks for using Baton!');
    }

    public function preAutoloadDump(): void
    {
        echo "Hello from Baton!\n";
    }

    public static function getSubscribedEvents(): array
    {

        return [
            ScriptEvents::PRE_AUTOLOAD_DUMP => 'preAutoloadDump',
        ];
    }
}
