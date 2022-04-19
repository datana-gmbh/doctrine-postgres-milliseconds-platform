<?php

declare(strict_types=1);

namespace Datana\Doctrine\PostgreSQL\Platform\Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Platforms\PostgreSQL100Platform;

final class PostgreSQLMillisecondsPlatform extends PostgreSQL100Platform
{
    public function getDateTimeFormatString(): string
    {
        return sprintf('%s.u', parent::getDateTimeFormatString());
    }
}
