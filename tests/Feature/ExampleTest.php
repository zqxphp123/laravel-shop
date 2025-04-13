<?php

use Illuminate\Support\Facades\Cache;

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('fake test', function () {
    $response = $this->postJson('/api/user', ['name' => 'Sally']);

    $response->assertStatus(200)->assertJson([
            'created' => true,
        ]);
});


