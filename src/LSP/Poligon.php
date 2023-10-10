<?php

namespace App\LSP;

class Poligon
{
    public function __construct(
        private FormInterface $form
    )
    {
    }

    public function getArea(): float
    {
        return $this->form->getHeigth() * $this->form->getWidth();
    }
}