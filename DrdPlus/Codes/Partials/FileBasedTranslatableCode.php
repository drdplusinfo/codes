<?php
namespace DrdPlus\Codes\Partials;

abstract class FileBasedTranslatableCode extends TranslatableCode
{
    protected function fetchTranslations(): array
    {
        $handle = fopen($this->getTranslationsFileName(), 'rb');
        $rows = [];
        while(($row = fgetcsv($handle)) !== false && $row !== null) {
            if ($row !== []) {
                $rows[] = $row;
            }
        }
        array_shift($rows); // removing header row
        $translations = [];
        foreach ($rows as $row) {
            $translations[$row[1] /* language */][$row[0]/* code */] = ['one' => $row[2], 'few' => $row[3], 'many' => $row[4]];
        }

        return $translations;
    }

    abstract protected function getTranslationsFileName(): string;
}