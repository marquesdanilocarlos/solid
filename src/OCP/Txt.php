<?php

namespace App\OCP;

class Txt extends File
{
    public function read(string $path): void
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

    public function getData(): array
    {
        return $this->data;
    }

    public function getName(): string

    {
        return $this->name;
    }
}