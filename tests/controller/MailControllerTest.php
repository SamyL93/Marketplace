<?php

//tests/controller/MailControllerTest.php
namespace App\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class MailControllerTest extends WebTestCase
{
    public function testMailIsSentAndContentIsOk(): void
    {
        $client = static::createClient();

        // enables the profiler for the next request (it does nothing if the profiler is not available)
        $client->enableProfiler();

        $crawler = $client->request('POST', '/path/to/above/action');

        $mailCollector = $client->getProfile()->getCollector('swiftmailer');

        // checks that an email was sent
      //  $this->assertSame(1, $mailCollector->getMessageCount());

        $collectedMessages = $mailCollector->getMessages('default');
        $message = $collectedMessages[0];

        // Asserting email data
        $this->assertInstanceOf('Swift_Message', $message);
        $this->assertSame('Hello Email', $message->getSubject());
        $this->assertSame('marketplace12344@gmail.com', key($message->getFrom()));
        $this->assertSame('paul.piotro@gmail.com', key($message->getTo()));
        $this->assertSame(
            'You should see me from the profiler!',
            $message->getBody()
        );
    }
}