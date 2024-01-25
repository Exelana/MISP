<?php

declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class FeedsFixture extends TestFixture
{
    public $connection = 'test';

    public const FEED_1_ID = 1000;
    public const FEED_1_NAME = 'test-feed-1';
    public const FEED_1_URL = 'http://feed1.local/misp/test-feed-1';

    public const FEED_2_ID = 2000;
    public const FEED_2_NAME = 'test-feed-2';
    public const FEED_2_URL = 'http://feed2.local/misp/test-feed-2';

    public const FEED_3_ID = 3000;
    public const FEED_3_NAME = 'test-feed-3';
    public const FEED_3_URL = 'http://feed3.local/freetext/test-feed-3';

    public const FEED_4_ID = 4000;
    public const FEED_4_NAME = 'test-feed-4';
    public const FEED_4_URL = 'http://feed4.local/csv/test-feed-4';

    public const FEED_5_ID = 5000;
    public const FEED_5_NAME = 'test-feed-5';
    public const FEED_5_URL = 'tests/Files/feeds/misp';

    public const FEED_6_ID = 6000;
    public const FEED_6_NAME = 'test-feed-6';
    public const FEED_6_URL = 'tests/Files/feeds/csv/feed.csv';

    public const FEED_7_ID = 7000;
    public const FEED_7_NAME = 'test-feed-6';
    public const FEED_7_URL = 'tests/Files/feeds/freetext/feed.txt';

    public function init(): void
    {
        $this->records = [
            [
                'id' => self::FEED_1_ID,
                'name' => self::FEED_1_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_1_URL,
                "source_format" => 'misp',
                "input_source" => "network",
                "settings" => "[]",
                'enabled' => true,
            ],
            [
                'id' => self::FEED_2_ID,
                'name' => self::FEED_2_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_2_URL,
                "source_format" => 'misp',
                "input_source" => "network",
                "settings" => "[]",
                'enabled' => false,
            ],
            [
                'id' => self::FEED_3_ID,
                'name' => self::FEED_3_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_3_URL,
                "source_format" => 'freetext',
                "input_source" => "network",
                "settings" => "{\"csv\":{\"value\":\"\",\"delimiter\":\",\"},\"common\":{\"excluderegex\":\"\"}}",
                'enabled' => true,
            ],
            [
                'id' => self::FEED_4_ID,
                'name' => self::FEED_4_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_4_URL,
                "source_format" => 'csv',
                "input_source" => "network",
                "settings" => "{\"csv\":{\"value\":\"1\"}}",
                'enabled' => true,
            ],
            [
                'id' => self::FEED_5_ID,
                'name' => self::FEED_5_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_5_URL,
                "source_format" => 'misp',
                "input_source" => "local",
                "settings" => "[]",
                'enabled' => true,
            ],
            [
                'id' => self::FEED_6_ID,
                'name' => self::FEED_6_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_6_URL,
                "source_format" => 'csv',
                "input_source" => "local",
                "settings" => "{\"csv\":{\"value\":\"1\"}}",
                'enabled' => true,
            ],
            [
                'id' => self::FEED_7_ID,
                'name' => self::FEED_7_NAME,
                'provider' => 'test-provider',
                'url' => self::FEED_7_URL,
                "source_format" => 'freetext',
                "input_source" => "local",
                "settings" => "{\"csv\":{\"value\":\"\",\"delimiter\":\",\"},\"common\":{\"excluderegex\":\"\"}}",
                'enabled' => true,
            ],
        ];
        parent::init();
    }
}
