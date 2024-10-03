<?php

namespace Dashopapp\GitCommitChecker\Providers;

use Dashopapp\GitCommitChecker\Commands\InstallCommand;
use Dashopapp\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
