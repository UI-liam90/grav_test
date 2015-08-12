<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'blueprints://user/account.yaml',
    'modified' => 1439382774,
    'data' => [
        'title' => 'Site',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'Account',
                    'fields' => [
                        'username' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Username',
                            'disabled' => true,
                            'readonly' => true
                        ],
                        'email' => [
                            'type' => 'email',
                            'size' => 'large',
                            'label' => 'Email',
                            'validate' => [
                                'type' => 'email',
                                'message' => 'Must be a valid email address',
                                'required' => true
                            ]
                        ],
                        'password' => [
                            'type' => 'password',
                            'size' => 'large',
                            'label' => 'Password',
                            'validate' => [
                                'required' => true,
                                'message' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters',
                                'pattern' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
                            ]
                        ],
                        'fullname' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Full name',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        'title' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Title'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
