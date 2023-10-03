<?php

namespace App;

enum OrderStatus: string
{
    case OPEN = "Aberto";
    case CONFIRMED = "Confirmado";
    case CANCELLED = "Cancelado";
    case SEND = "Enviado";
    case FINISHED = "Finalizado";
}