<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Chat\V2;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ServiceTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://chat.twilio.com/v2/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "consumption_report_interval": 100,
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "default_channel_creator_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "default_channel_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "default_service_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "limits": {
                    "channel_members": 100,
                    "user_channels": 250
                },
                "links": {
                    "channels": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Channels",
                    "users": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users",
                    "roles": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles",
                    "bindings": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings"
                },
                "notifications": {},
                "post_webhook_url": "post_webhook_url",
                "pre_webhook_url": "pre_webhook_url",
                "pre_webhook_retry_count": 2,
                "post_webhook_retry_count": 3,
                "reachability_enabled": false,
                "read_status_enabled": false,
                "sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "typing_indicator_timeout": 100,
                "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "webhook_filters": [
                    "webhook_filters"
                ],
                "webhook_method": "webhook_method",
                "media": {
                    "size_limit_mb": 150,
                    "compatibility_message": "media compatibility message"
                }
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://chat.twilio.com/v2/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services->create("friendlyName");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('FriendlyName' => "friendlyName", );

        $this->assertRequest(new Request(
            'post',
            'https://chat.twilio.com/v2/Services',
            null,
            $values
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "consumption_report_interval": 100,
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "default_channel_creator_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "default_channel_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "default_service_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "limits": {
                    "channel_members": 100,
                    "user_channels": 250
                },
                "links": {
                    "channels": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Channels",
                    "users": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users",
                    "roles": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles",
                    "bindings": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings"
                },
                "notifications": {},
                "post_webhook_url": "post_webhook_url",
                "pre_webhook_url": "pre_webhook_url",
                "pre_webhook_retry_count": 2,
                "post_webhook_retry_count": 3,
                "reachability_enabled": false,
                "read_status_enabled": false,
                "sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "typing_indicator_timeout": 100,
                "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "webhook_filters": [
                    "webhook_filters"
                ],
                "webhook_method": "webhook_method",
                "media": {
                    "size_limit_mb": 150,
                    "compatibility_message": "media compatibility message"
                }
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services->create("friendlyName");

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://chat.twilio.com/v2/Services'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://chat.twilio.com/v2/Services?PageSize=50&Page=0",
                    "key": "services",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://chat.twilio.com/v2/Services?PageSize=50&Page=0"
                },
                "services": []
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://chat.twilio.com/v2/Services?PageSize=50&Page=0",
                    "key": "services",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://chat.twilio.com/v2/Services?PageSize=50&Page=0"
                },
                "services": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "consumption_report_interval": 100,
                        "date_created": "2015-07-30T20:00:00Z",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "default_channel_creator_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "default_channel_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "default_service_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "friendly_name",
                        "limits": {
                            "channel_members": 100,
                            "user_channels": 250
                        },
                        "links": {
                            "channels": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Channels",
                            "users": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users",
                            "roles": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles",
                            "bindings": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings"
                        },
                        "notifications": {},
                        "post_webhook_url": "post_webhook_url",
                        "pre_webhook_url": "pre_webhook_url",
                        "pre_webhook_retry_count": 2,
                        "post_webhook_retry_count": 3,
                        "reachability_enabled": false,
                        "read_status_enabled": false,
                        "sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "typing_indicator_timeout": 100,
                        "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "webhook_filters": [
                            "webhook_filters"
                        ],
                        "webhook_method": "webhook_method",
                        "media": {
                            "size_limit_mb": 150,
                            "compatibility_message": "media compatibility message"
                        }
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://chat.twilio.com/v2/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "consumption_report_interval": 100,
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "default_channel_creator_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "default_channel_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "default_service_role_sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "limits": {
                    "channel_members": 500,
                    "user_channels": 600
                },
                "links": {
                    "channels": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Channels",
                    "users": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users",
                    "roles": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles",
                    "bindings": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings"
                },
                "notifications": {
                    "log_enabled": true,
                    "added_to_channel": {
                        "enabled": false,
                        "template": "notifications.added_to_channel.template"
                    },
                    "invited_to_channel": {
                        "enabled": false,
                        "template": "notifications.invited_to_channel.template"
                    },
                    "new_message": {
                        "enabled": false,
                        "template": "notifications.new_message.template",
                        "badge_count_enabled": true
                    },
                    "removed_from_channel": {
                        "enabled": false,
                        "template": "notifications.removed_from_channel.template"
                    }
                },
                "post_webhook_url": "post_webhook_url",
                "pre_webhook_url": "pre_webhook_url",
                "pre_webhook_retry_count": 2,
                "post_webhook_retry_count": 3,
                "reachability_enabled": false,
                "read_status_enabled": false,
                "sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "typing_indicator_timeout": 100,
                "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "webhook_filters": [
                    "webhook_filters"
                ],
                "webhook_method": "webhook_method",
                "media": {
                    "size_limit_mb": 150,
                    "compatibility_message": "new media compatibility message"
                }
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }
}