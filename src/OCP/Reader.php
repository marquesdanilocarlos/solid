<?php

namespace App\OCP;

class Reader
{
    public function __construct(
        private string $directory,
        private string $file
    ) {
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function readFile()
    {
        $path = "{$this->getDirectory()}/{$this->getFile()}";
        $file = new File();
        $file->readCSV($path);

        return $file->getData();
    }
}