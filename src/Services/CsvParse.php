<?php

namespace TheDonHimself\EmailCsvParse\Services;

class CsvParse
{
    public function parse($filePath)
    {
        $csv = array_map('str_getcsv', file($filePath));
        array_walk($csv, function(&$a) use ($csv) {
          $a = array_combine($csv[0], $a);
        });
        array_shift($csv); // remove column header

        return $csv;
    }
}
