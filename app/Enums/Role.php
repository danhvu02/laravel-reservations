<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Role extends Enum
{
    const Administrator = 1;
    const CompanyOwner = 2;
    const Customer = 3;
    const Guide = 4;

}
