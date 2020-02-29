<?php
declare(strict_types=1);

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('example:hello')
            ->setDescription('An example command')
        ;
    }

    public function run(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello Command');

        return 0;
    }
}
