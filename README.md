# csv-parse
A very simple, very quick class and command line application that can parse CSV into a multidimensional array.

## CSV Format
The CSV must have the first row as a header.

## Example
For example a CSV with

| First Name    | Last Name     | Email                   |
| ------------- | ------------- | -------------           |
| Don           | Omondi        | don.e.omondi@gmail.com  |

Will become a multidimensional array with each row looking like this when using the `print_r` command

    [0] => Array
        (
            [First Name] => Don
            [Last Name] => Omondi
            [Email] => don.e.omondi@gmail.com
        )


## Usage

### CLI
To use the CLI, for example to verify how many records get parsed, simply have the package and execute this command

`php bin/parse parse:csv`


### Class
To use this within your own application simply directly invoke the class parse method with the location of the CSV file.

$csvParse = new \TheDonHimself\CsvParse\Services\CsvParse();
$data = $csvParse->parse($filePath);

Enjoy.