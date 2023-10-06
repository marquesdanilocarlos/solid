<?php

namespace App\OCP;

class Csv extends File
{
    public function read(string $path): void
    {
        $handle = fopen($path, 'r');

        while ($data = fgetcsv($handle, null, ";")) {
            $this->setData($data);
        }

        fclose($handle);
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getName(): string

    {
        return $this->name;
    }
}