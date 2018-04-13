<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Studio\Flow\Engagement;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class StepTest extends HolodeckTestCase {
    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->studio->flows("FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->engagements("FNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->steps->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/Studio/Flows/FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Engagements/FNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Steps'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "previous_page_url": null,
                    "next_page_url": null,
                    "url": "https://preview.twilio.com/Studio/Flows/FWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Engagements/FNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Steps?PageSize=50&Page=0",
                    "page": 0,
                    "first_page_url": "https://preview.twilio.com/Studio/Flows/FWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Engagements/FNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Steps?PageSize=50&Page=0",
                    "page_size": 50,
                    "key": "steps"
                },
                "steps": []
            }
            '
        ));

        $actual = $this->twilio->preview->studio->flows("FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                ->engagements("FNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                ->steps->read();

        $this->assertNotNull($actual);
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->studio->flows("FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->engagements("FNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->steps("FTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/Studio/Flows/FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Engagements/FNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Steps/FTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "FTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "flow_sid": "FWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "engagement_sid": "FNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "name": "incomingRequest",
                "context": {},
                "transitioned_from": "Trigger",
                "transitioned_to": "Ended",
                "date_created": "2017-11-06T12:00:00Z",
                "date_updated": null,
                "url": "https://preview.twilio.com/Studio/Flows/FWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Engagements/FNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Steps/FTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->preview->studio->flows("FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                ->engagements("FNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                ->steps("FTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }
}