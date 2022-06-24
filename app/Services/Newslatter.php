<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

Class Newslatter 
{
    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.list.subscribers');

        return $this->client()->lists->addListMember( $list ,[
            "email_address" => $email,
            "status" => "subscribed",
        ]);

    }

    protected function client()
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20',
        ]);
    }
}