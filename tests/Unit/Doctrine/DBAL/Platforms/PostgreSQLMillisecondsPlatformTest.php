<?php

declare(strict_types=1);

/*
 * This file is part of datana-gmbh/doctrine-postgresql-milliseconds-platform package.
 *
 * (c) Datana GmbH <info@datana.rocks>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Datana\Doctrine\PostgreSQL\Platform\Tests\Unit\Doctrine\DBAL\Platforms;

use Datana\Doctrine\PostgreSQL\Platform\Doctrine\DBAL\Platforms\PostgreSQLMillisecondsPlatform;
use PHPUnit\Framework\TestCase;

final class PostgreSQLMillisecondsPlatformTest extends TestCase
{
    /**
     * @test
     */
    public function getDateTimeFormatString(): void
    {
        $platform = new PostgreSQLMillisecondsPlatform();

        self::assertSame(
            'Y-m-d H:i:s.u',
            $platform->getDateTimeFormatString(),
        );
    }
}
