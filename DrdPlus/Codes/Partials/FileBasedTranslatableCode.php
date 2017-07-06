<?php
namespace DrdPlus\Codes\Partials;

abstract class FileBasedTranslatableCode extends TranslatableCode
{
    protected function fetchTranslations(): array
    {
        $handle = fopen($this->getTranslationsFileName(), 'rb');
        $rows = [];
        while (($row = fgetcsv($handle)) !== false && $row !== null) {
            if ($row !== []) {
                $rows[] = $row;
            }
        }
        array_shift($rows); // removing header row
        $translations = [];
        foreach ($rows as $row) {
            $translation = ['one' => $row[2]];
            if (array_key_exists(3, $row)) {
                $translation['few'] = $row[3];
                if (array_key_exists(4, $row)) {
                    $translation['many'] = $row[4];
                }
            }
            $translations[$row[1] /* language */][$row[0]/* code */] = $translation;
        }

        return $translations;
    }

    abstract protected function getTranslationsFileName(): string;
}