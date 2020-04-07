<?php

namespace TheDonHimself\CsvParse\Commands;

use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use TheDonHimself\CsvParse\Services\CsvParse;

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

        $filePath = $io->ask('Enter the path to a CSV file', null, function ($inputPath) {
            if (null === $inputPath) {
                throw new RuntimeException('A path to a CSV File is required!');
            }

            return $inputPath;
        });

        $output->writeln('Parsing CSV...');

        $csvParse = new CsvParse();
        $data = $csvParse->parse($filePath);

        $output->writeln('Parsed ' . count($data) . ' records');

        return 0;
    }
}
