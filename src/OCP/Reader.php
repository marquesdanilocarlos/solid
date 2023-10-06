<?php

namespace App\OCP;

class Reader
{
    public function __construct(
        private string $directory,
        private File $file
    ) {
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function readFile(): array
    {
        $path = "{$this->getDirectory()}/{$this->file->getName()}";
        $this->file->read($path);
        return $this->file->getData();
    }
}