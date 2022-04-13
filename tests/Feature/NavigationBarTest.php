<?php

it('has a home logo')
    ->get('/')
    ->assertSee(
        'class="logo"',
        false
    );

it('contains a menu item called "Diensten"')
    ->get('/')
    ->assertSeeText('Diensten');

it('contains a menu item called "Over mij"')
    ->get('/')
    ->assertSeeText('Over mij');

it('contains a menu item called "Expertises"')
    ->get('/')
    ->assertSeeText('Expertises');

it('contains a menu item called "Contact"')
    ->get('/')
    ->assertSeeText('Contact');

it('shows the company mailaddress')
    ->get('/')
    ->assertSeeText('info@mentod.nl');

it('contains a link to mail towards the mailaddress')
    ->get('/')
    ->assertSee('mailto:info@mentod.nl');
