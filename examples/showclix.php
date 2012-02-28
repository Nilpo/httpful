<?php

require(__DIR__ . '/../bootstrap.php');
use \Httpful\Request;

// Get event details for a public event
$uri = "http://api.showclix.com/Event/8175";
$response = Request::get($uri)
    ->expectsType('json')
    ->sendIt();

// Print out the event details
echo "The event {$response->body->event} will take place on {$response->body->event_start}\n";