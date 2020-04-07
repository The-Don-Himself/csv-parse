<?php

namespace TheDonHimself\EmailCsvParse\Commands;

use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ParseCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('parse:csv')
            ->setDescription('Parse CSV')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Parse the CSV File');

        $configPath = $io->ask('Enter the path to a CSV file', null, function ($input_path) {
            return $input_path;
        });

        return 0;
    }
}
