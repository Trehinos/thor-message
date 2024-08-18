<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Thor\Message\Email;

final class MessageTest extends TestCase {

    public function testMessage() {
        $message = new Email(
            "no-reply@example.com",
            "A new email",
            "Hello world !",
            [
                "image-cid" => "path/to/image.png",
            ],
            [
                "path/to/other-file.pdf",
            ]
        );
        echo("$message");
    }

}
