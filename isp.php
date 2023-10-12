<?php

require __DIR__ . "/vendor/autoload.php";

use App\ISP\DAO\ContractModel;
use App\ISP\DAO\LeadModel;
use App\ISP\DAO\UserModel;

$contractModel = new ContractModel();
$leadModel = new LeadModel();
$userModel = new UserModel();

var_dump($contractModel, $leadModel, $userModel);