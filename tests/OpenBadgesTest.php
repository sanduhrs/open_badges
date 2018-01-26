<?php

namespace sanduhrs\OpenBadges;

use PHPUnit\Framework\TestCase;
use sanduhrs\OpenBadges\VerificationObject\HostedBadge;

class OpenBadgesTest extends TestCase
{
    /**
     */
    public function testAssertion01()
    {
        $fixture = __DIR__ . '/fixtures/' . str_replace('test', '', explode('::', __METHOD__)[1]) . '.json';
        $object = new Assertion([
            "id" => "https://example.org/beths-robotics-badge.json",
            "recipient" => new IdentityObject([
                "identity" => "steved@example.org",
                "type" => "email",
                "hashed" => true,
                "salt" => "deadsea",
            ]),
            "image" => "https://example.org/beths-robot-badge.png",
            "evidence" => "https://example.org/beths-robot-work.html",
            "issuedOn" => "2016-12-31T23:59:59Z",
            "expires" => "2017-06-30T23:59:59Z",
            "badge" => "https://example.org/robotics-badge.json",
            "verification" => new HostedBadge([
                "type" => "hosted",
            ]),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testAssertion02()
    {
        $fixture = __DIR__ . '/fixtures/Assertion02.json';
        $object = new Assertion([
            "id" => "https://example.org/beths-robotics-badge.json",
            "recipient" => new IdentityObject([
                "identity" => 'stefan.auditor@erdfisch.de',
                "type" => "email",
                "hashed" => true,
                "salt" => "deadsea",
            ]),
            "issuedOn" => "2016-12-31T23:59:59Z",
            "verification" => new HostedBadge(),
            "badge" => new BadgeClass([
                "id" => "https://example.org/robotics-badge.json",
                "name" => "Awesome Robotics Badge",
                "description" => "For doing awesome things with robots that people think is pretty great.",
                "image" => "https://example.org/robotics-badge.png",
                "criteria" => "https://example.org/robotics-badge.html",
                "issuer" => new Profile([
                    "id" => "https://example.org/organization.json",
                    "name" => "https://example.org/organization.json",
                    "image" => "https://example.org/logo.png",
                    "url" => "https://example.org",
                    "email" => "steved@example.org",
                ]),
            ]),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testAssertion03()
    {
        $fixture = __DIR__ . '/fixtures/Assertion03.json';
        $object = new Assertion([
          "id" => "https://example.org/beths-robotics-badge.json",
          "evidence" => "https://example.org/beths-robot-work.html",
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testAssertion04()
    {
        $fixture = __DIR__ . '/fixtures/Assertion04.json';
        $object = new Assertion([
          "id" => "https://example.org/beths-robotics-badge.json",
          "evidence" => new Evidence([
            "id" => "https://example.org/beths-robot-work.html",
            "name" => "My Robot",
            "description" => "A webpage with a photo and a description of the robot the student built for this project.",
            "narrative" => "The student worked very hard to assemble and present a robot. She documented the process with photography and text.",
            "genre" => "ePortfolio",
          ]),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testAssertion05()
    {
        $fixture = __DIR__ . '/fixtures/Assertion05.json';
        $object = new Assertion([
          "id" => "https://example.org/beths-robotics-badge.json",
          "narrative" => "This student invented her own type of robot. This included: \n\n  * Working robot arms\n  * Working robot legs",
          "evidence" => [
            new Evidence([
              "id" => "https://example.org/beths-robot-photos.html",
              "name" => "Robot Photoshoot",
              "description" => "A gallery of photos of the student's robot",
              "genre" => "Photography",
            ]),
            new Evidence([
              "id" => "https://example.org/beths-robot-work.html",
              "name" => "Robotics Reflection #1",
              "description" => "Reflective writing about the first week of a robotics learning journey.",
            ]),
          ]
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testBadgeClass01()
    {
        $fixture = __DIR__ . '/fixtures/BadgeClass01.json';
        $object = new BadgeClass([
            "@language" => "en-us",
            "id" => "https://example.org/robotics-badge.json",
            "name" => "Awesome Robotics Badge",
            "description" => "For doing awesome things with robots that people think is pretty great.",
            "image" => "https://example.org/robotics-badge.png",
            "criteria" => "https://example.org/robotics-badge.html",
            "tags" => [
              "robots",
              "awesome",
            ],
            "issuer" => "https://example.org/organization.json",
            "alignment" => [
                new AlignmentObject([
                    "@context" => "https:\/\/w3id.org\/openbadges\/v2",
                    "@type" => "AlignmentObject",
                    "targetName" => "CCSS.ELA-Literacy.RST.11-12.3",
                    "targetUrl" => "http://www.corestandards.org/ELA-Literacy/RST/11-12/3",
                    "targetDescription" => "Follow precisely a complex multistep procedure when carrying out experiments, taking measurements, or performing technical tasks; analyze the specific results based on explanations in the text.",
                    "targetCode" => "CCSS.ELA-Literacy.RST.11-12.3",
                ]),
                new AlignmentObject([
                    "@context" => "https:\/\/w3id.org\/openbadges\/v2",
                    "@type" => "AlignmentObject",
                    "targetName" => "Problem-Solving",
                    "targetUrl" => "https://learning.mozilla.org/en-US/web-literacy/skills#problem-solving",
                    "targetDescription" => "Using research, analysis, rapid prototyping, and feedback to formulate a problem and develop, test, and refine the solution/plan.",
                    "targetFramework" => "Mozilla 21st Century Skills",
                ])
            ],
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    #public function testBadgeClass02()
    #{
    #    $fixture = __DIR__ . '/fixtures/BadgeClass02.json';
    #    $object = new BadgeClass([
    #        "id" => "https://example.org/beths-robotics-badge.json",
    #        "name" => "Awesome Robotics Badge",
    #    ]);
    #    $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    #}

    /**
     */
    #public function testBadgeClass03()
    #{
    #    $fixture = __DIR__ . '/fixtures/BadgeClass03.json';
    #    $object = new BadgeClass([
    #        "id" => "https://example.org/beths-robotics-badge.json",
    #        "name" => "Awesome Robotics Badge",
    #        "related" => [
    #          new Relation([
    #            "id" => "https://example.org/beths-robotics-badge-es.json?l=es",
    #          ]),
    #        ],
    #    ]);
    #    $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    #}

    /**
     */
    public function testBadgeClass04()
    {
        $fixture = __DIR__ . '/fixtures/BadgeClass04.json';
        $object = new BadgeClass([
            "id" => "https://example.org/beths-robotics-badge-v2.json",
            "name" => "Awesomer Robotics Badge",
            "version" => 2,
            "related" => [
                new Relation([
                    "id" => "https://example.org/beths-robotics-badge.json",
                    "version" => 1,
                ]),
            ],
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testBadgeClass05()
    {
        $fixture = __DIR__ . '/fixtures/BadgeClass05.json';
        $object = new BadgeClass([
          "id" => "https://example.org/beths-robotics-badge.json",
          "criteria" => new Criteria([
              "id" => "https://example.org/robotics-badge.html",
              "narrative" => "To earn the **Awesome Robotics Badge**, students must construct a basic robot.\n\nThe robot must be able to:\n\n  * Move forward and backwards.\n* Pick up a bucket by its handle.",
          ]),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testBadgeClass06()
    {
        $fixture = __DIR__ . '/fixtures/BadgeClass06.json';
        $object = new BadgeClass([
            "id" => "https://example.org/beths-robotics-badge.json",
            "criteria" => new Criteria([
                "id" => "https://example.org/robotics-badge.html",
                "narrative" => "To earn the **Awesome Robotics Badge**, students must construct a basic robot.\n\nThe robot must be able to:\n\n  * Move forward and backwards [1](https://example.org/robot-skills/1).\n  * Pick up a bucket by its handle [2](https://example.org/robot-skills/2).",
            ]),
            "alignment" => [
                new AlignmentObject([
                    "targetUrl" => "https://example.org/robot-skills/1",
                    "targetName" => "Basic Locomotion",
                ]),
                new AlignmentObject([
                    "targetUrl" => "https://example.org/robot-skills/2",
                    "targetName" => "Object Manipulation",
                ]),
            ]
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testBadgeClass07()
    {
        $fixture = __DIR__ . '/fixtures/BadgeClass07.json';
        $object = new BadgeClass([
            "id" => "https://example.org/beths-robotics-badge.json",
            "criteria" => "https://example.org/robotics-badge.html",
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testCryptographicKey01()
    {
        $fixture = __DIR__ . '/fixtures/CryptographicKey01.json';
        $object = new CryptographicKey([
            "id" => "https://example.org/publicKey.json",
            "owner" => "https://example.org/organization.json",
            "publicKeyPem" => "-----BEGIN PUBLIC KEY-----\nMIIBG0BA...OClDQAB\n-----END PUBLIC KEY-----\n",
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testEndorsement01()
    {
        $fixture = __DIR__ . '/fixtures/Endorsement01.json';
        $object = new Endorsement([
            "id" => "https://example.org/assertions/123",
            "issuer" => "https://example.org/issuer",
            "claim" => [
                "id" => "https://otherissuer.example/1",
                "email" => "contact@otherissuer.example",
                "endorsementComment" => "A great provider of badged learning.",
            ],
            "verification" => new HostedBadge(),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testEndorsement02()
    {
        $fixture = __DIR__ . '/fixtures/Endorsement02.json';
        $object = new Endorsement([
          "id" => "https://example.org/endorsement-123.json",
          "issuer" => "https://example.org/issuer-5.json",
          "claim" => [
              "id" => "https://example.org/organization.json",
              "email" => "contact@example.org",
          ],
          "verification" => new HostedBadge(),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testEndorsement03()
    {
        $fixture = __DIR__ . '/fixtures/Endorsement03.json';
        $object = new Endorsement([
          "id" => "https://example.org/endorsement-123.json",
          "issuer" => "https://example.org/issuer-5.json",
          "claim" => [
              "id" => "https://example.org/robotics-badge.json",
              "endorsementComment" => "This badge and its associated learning material are great examples of beginning robotics education.",
          ],
          "verification" => new HostedBadge(),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testEndorsement04()
    {
        $fixture = __DIR__ . '/fixtures/Endorsement04.json';
        $object = new Endorsement([
          "id" => "https://example.org/endorsement-125.json",
          "issuer" => "https://example.org/issuer-5.json",
          "claim" => [
              "id" => "https://example.org/beths-robotics-badge.json",
              "endorsementComment" => "This student built a great robot.",
              "evidence" => "https://example.org/photos/my-photos-of-the-robot-competition.html",
          ],
          "verification" => new HostedBadge(),
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }

    /**
     */
    public function testEvidence01()
    {
        $fixture = __DIR__ . '/fixtures/Evidence01.json';
        $object = new Evidence([
            "id" => "https://example.org/beths-robotics-badge.json",
            "narrative" => "This student invented her own type of robot. This included: \n\n  * Working robot arms\n  * Working robot legs",
        ]);
        $this->assertJsonStringEqualsJsonFile($fixture, json_encode($object));
    }
}
