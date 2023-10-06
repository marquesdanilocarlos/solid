<?php

namespace App\OCP;

class File
{
    private array $data = [];

    public function setData(array $data): void
    {
        $data = array_map(fn($item) => iconv('iso-8859-1', 'utf-8', $item), $data);
        $this->data[] = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function readCSV(string $path): void
    {
        $handle = fopen($path, 'r');

        while ($data = fgetcsv($handle, null, ";")) {
            $this->setData($data);
        }

        fclose($handle);
    }
}