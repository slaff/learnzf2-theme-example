<?php
return array(
    'themes' => array(
        'example' => array(
            'description' => 'Example Theme',
            'template_map' => array(
                'layout/layout' => __DIR__.'/../theme/example/layout.phtml',
            ),
            'template_path_stack' => array(
                'ExampleTheme' => __DIR__ . '/../theme/example/',
            ),
        )
    ),
);
