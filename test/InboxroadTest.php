<?php declare(strict_types=1);

namespace Inboxroad\Test;

use Inboxroad\Api\Messages;
use Inboxroad\HttpClient\HttpClient;
use Inboxroad\Inboxroad;

/**
 * Class InboxroadTest
 * @package Inboxroad\Test;
 */
class InboxroadTest extends Base
{
    /**
     * @var Inboxroad
     */
    private $inboxroad;

    /**
     * @return void
     * @throws \ErrorException
     */
    public function setUp(): void
    {
        parent::setUp();
        
        $this->inboxroad = new Inboxroad(new HttpClient((string)getenv('INBOXROAD_API_KEY')));
    }

    /**
     * @return void
     */
    public function testMessages(): void
    {
        $this->assertInstanceOf(Messages::class, $this->inboxroad->messages());
    }
}
