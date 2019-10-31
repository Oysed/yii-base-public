<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:'.__DIR__ . '/db.db',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.mail.com',
                'username' => 'mail@mail.com',
                'password' => 'password',
                'port' => '587',
                'encryption' => 'tls'
                ],
        ],
    ],
];
