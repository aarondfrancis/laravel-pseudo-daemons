<?php
/**
 * @author Aaron Francis <aarondfrancis@gmail.com|https://twitter.com/aarondfrancis>
 */

namespace Hammerstone\PseudoDaemon\Tests\Support;

use Hammerstone\PseudoDaemon\IsPseudoDaemon;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    use IsPseudoDaemon;

    public function handle()
    {
        $this->runAsPseudoDaemon();
    }

    /**
     * This is the main method that will be kept alive.
     */
    public function process()
    {

    }
}
