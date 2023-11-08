<?php

namespace App\Constants;

abstract class Resume
{
    const INFO = [
        'name' => 'Mustapha Hammouny',
        'birth-date' => '06/22/1992',
        'email' => 'contact@mustaphahammouny.com',
        'phone' => '+212 676 991 956',
        'address' => 'GP ELFAKHR N°1 Tabriquet',
        'city' => 'Sale',
        'country' => 'Morocco',
        'nationality' => 'Moroccan',
        'job' => 'Full Stack developer',
        'description' => 'A dedicated Fullstack Developer who loves to code and bring ideas to digital life. Feel free to get in touch with me for more information.',
    ];

    const SOCIALS = [
        [
            'external-link' => 'https://github.com/mustaphahammouny',
            'class' => 'social-icons-linkedin',
            'icon' => 'fab fa-github',
        ],
        [
            'external-link' => 'https://linkedin.com/in/mustapha-hammouny-a619b1147',
            'class' => 'social-icons-linkedin',
            'icon' => 'fab fa-linkedin-in',
        ],
        [
            'external-link' => 'https://twitter.com/mustapha_hamony',
            'class' => 'social-icons-linkedin',
            'icon' => 'fab fa-twitter',
        ],
    ];

    const EXPERIENCES = [
        [
            'company' => 'KJR Telecom',
            'from' => '01/03/2023',
            'to' => 'Present',
            'job' => 'Full Stack developer - Laravel / Javascript',
            'description' =>
            'Participating in the construction, development, and maintenance of web applications as per the request of the French operator, Free Telecom.',
            'technologies' => ['Html', 'Css', 'PHP', 'Laravel', 'Bootstrap', 'JS', 'jQuery', 'Mysql', 'Git',],
        ],
        [
            'company' => 'RC2K',
            'from' => '02/12/2019',
            'to' => '28/02/2023',
            'job' => 'Full Stack developer - Laravel / Javascript',
            'description' =>
            'Participating in the construction, development, and maintenance of web applications as per the request of the French operator, Free Telecom.',
            'technologies' => ['Html', 'Css', 'PHP', 'Laravel', 'Bootstrap', 'JS', 'jQuery', 'Mysql', 'Git',],
        ],
        [
            'company' => 'CreaSouk',
            'from' => '04/03/2019',
            'to' => '30/11/2019',
            'job' => 'Full Stack developer - Codeigniter / Javascript',
            'description' =>
            'Development of a platform for creating and managing online stores.',
            'technologies' => ['Html', 'Css', 'PHP', 'Codeigniter', 'Bootstrap', 'JS', 'jQuery', 'Mysql', 'Git',],
        ],
        [
            'company' => 'Opteamum',
            'from' => '03/12/2018',
            'to' => '01/03/2019',
            'job' => 'Intership',
            'description' =>  'Development of a platform for excursion management.',
            'technologies' => ['Html', 'Css', 'PHP', 'Zend', 'Bootstrap', 'JS', 'jQuery', 'Mysql', 'Git',],
        ],
        [
            'company' => 'Faculty of Sciences - Rabat',
            'from' => '02/2017',
            'to' => '05/2017',
            'job' => 'Substitute teacher',
            'description' =>  'Teaching of practical work and supervised work.',
            'technologies' => ['C'],
        ],
    ];

    const EDUCATION = [
        [
            'school' => 'Faculty of Sciences - Rabat',
            'from' =>  '2014',
            'to' => '2016',
            'level' =>  'Master\'s degree',
            'option' => 'Informatics, Automatics and Embedded Systems',
            'description' => 'Master\'s degree in Informatics, Automatics and Embedded Systems',
        ],
        [
            'school' => 'Faculty of Sciences - Rabat',
            'from' =>  '2010',
            'to' => '2014',
            'level' =>  'Bachelor\'s degree',
            'option' => 'Informatics, Electronics, Automatics',
            'description' => 'Bachelor\'s degree in Informatics, Electronics, Automatics',
        ],
        [
            'school' => 'High school Lafqui Titouani - Sale',
            'from' =>  '2009',
            'to' => '2010',
            'level' =>  'Baccalaureate degree',
            'option' => 'Sciences of Physics',
            'description' => 'Baccalaureate degree in Experimental Sciences (option: Sciences of Physics)',
        ],
    ];

    const SKILLS = [
        ['name' => 'C', 'logo' => 'c.svg'],
        ['name' => 'C++', 'logo' => 'c++.svg'],
        ['name' => 'HTML', 'logo' => 'html.svg'],
        ['name' => 'CSS', 'logo' => 'css.svg'],
        ['name' => 'Bootstrap', 'logo' => 'bootstrap.svg'],
        ['name' => 'PHP', 'logo' => 'php.svg'],
        ['name' => 'Mysql', 'logo' => 'mysql.svg'],
        ['name' => 'JS', 'logo' => 'javascript.svg'],
        ['name' => 'jQuery', 'logo' => 'jquery.svg'],
        ['name' => 'Codeigniter', 'logo' => 'codeigniter.svg'],
        ['name' => 'Laravel', 'logo' => 'laravel.svg'],
        ['name' => 'Livewire', 'logo' => 'livewire.svg'],
        ['name' => 'TS', 'logo' => 'typescript.svg'],
        ['name' => 'Nodejs', 'logo' => 'nodejs.svg'],
        ['name' => 'Vue', 'logo' => 'vue.svg'],
        ['name' => 'Angular', 'logo' => 'angular.svg'],
        ['name' => 'Git', 'logo' => 'git.svg'],
    ];

    const PERSONALITY = [
        ['name' => 'Problem solving', 'level' => 90],
        ['name' => 'Autonomy', 'level' => 85],
        ['name' => 'Teamwork', 'level' => 80],
        ['name' => 'Time Management', 'level' => 70],
        ['name' => 'Adaptability', 'level' => 85],
        ['name' => 'Communication', 'level' => 75],
        ['name' => 'Empathy', 'level' => 75],
    ];

    const LANGUAGES = [
        ['name' => 'Arabic', 'level' => 'Native language'],
        ['name' => 'English', 'level' => 'Intermediate'],
        ['name' => 'French', 'level' => 'Intermediate'],
    ];

    const INTERESTS = [
        'Traveling', 'Technology', 'Reading', 'Sport',
    ];

    public static function all(): array
    {
        return [
            'info' => self::INFO,
            'experiences' => self::EXPERIENCES,
            'education' => self::EDUCATION,
            'skills' => self::SKILLS,
            'personality' => self::PERSONALITY,
            'languages' => self::LANGUAGES,
            'interests' => self::INTERESTS,
        ];
    }

    public static function fullAddress(): string
    {
        return __(self::INFO['address']) . ' ' . __(self::INFO['city']) . ' - ' . __(self::INFO['country']);
    }
}
