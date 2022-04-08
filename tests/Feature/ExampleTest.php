<?php

it('has a welcome page')->get('/')->assertStatus(200);
