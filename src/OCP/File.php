<?php

namespace App\OCP;

class File
{
    private array $data = [];

    public function setData(array $data): void
    {
        $data = array_map(fn($item) => trim(iconv('iso-8859-1', 'utf-8', $item)), $data);
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

    public function readTXT(string $path): void
    {
        $handle = fopen($path, 'r');

        while (!feof($handle)) {
            $line = fgets($handle);
            $cpf = substr($line, 0, 11);
            $name = substr($line, 11, 30);
            $email = substr($line, 41, 50);
            $this->setData([$cpf, $name, $email]);
        }

        fclose($handle);
    }
}