<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @internal
 * @coversNothing
 */
final class HomeActionTest extends WebTestCase
{
    public function testSuccess(): void
    {
        $client = self::createClient();

        $client->request('GET', '/');

        self::assertSame(200, $client->getResponse()->getStatusCode());
    }
}
