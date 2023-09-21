<?php

namespace App\Constants;

abstract class Menu
{
    const HEADER = [
        ['name' => 'Home', 'to' => 'home'],
        ['name' => 'Projects', 'to' => 'projects.index'],
        ['name' => 'Blogs', 'to' => 'blogs.index'],
        // ['name' => 'Contact', 'to' => 'contact.index'],
    ];

    const HOME = [
        ['name' => 'Experiences', 'to' => '#experiences'],
        ['name' => 'Education', 'to' => '#education'],
        ['name' => 'Skills', 'to' => '#skills'],
        ['name' => 'Personality', 'to' => '#personality'],
        ['name' => 'Languages', 'to' => '#languages'],
        // ['name' => 'Interests', 'to' => '#interests'],
    ];
}
