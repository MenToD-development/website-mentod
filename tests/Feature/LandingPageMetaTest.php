<?php

it('it loads the landing page')
    ->get('/')
    ->assertStatus(200);

it('has a meta description')
    ->get('/')
    ->assertSee('MenToD for every full-stack webdevelopment you need.');

it('shows the company name')
    ->get('/')
    ->assertSee('MenToD');

it('shows the creators name')
    ->get('/')
    ->assertSee('Menno Tempelaar');

it('has the keyword webdevelopment')
    ->get('/')
    ->assertSee('webdevelopment');

it('has the keyword laravel')
    ->get('/')
    ->assertSee('laravel');
