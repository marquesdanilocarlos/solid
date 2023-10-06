<?php

namespace App\OCP;

abstract class File
{
    protected array $data = [];

    public function __construct(
        protected string $name
    )
    {
    }

    public function setData(array $data): void
    {
        $data = array_map(fn($item) => trim(iconv('iso-8859-1', 'utf-8', $item)), $data);
        $this->data[] = $data;
    }

    protected abstract function getData(): array;

    public abstract function getName(): string;

    public abstract function read(string $path): void;
}