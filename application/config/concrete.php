<?php

return array(

/**
     * ------------------------------------------------------------------------
     * Email settings
     * ------------------------------------------------------------------------
     */
    'email'             => array(

        /**
         * Enable emails
         *
         * @var bool
         */
        'enabled' => true,
        'default' => array(
            'address' => 'dodgeball-noreply@' . (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost'),
            'name'    => ''
        ),
        'form_block' => array(
            'address' => 'info@dodgeball.ch',
        )
    ),

    'marketplace'       => array(

        'enabled'            => false,

    ),

    'external'              => array(

        'intelligent_search_help' => true,
        'news_overlay'            => false,
        'news'                    => false,
    ),

    'accessibility'     => array(
        'toolbar_titles'     => true,
        'display_help_system' => false
    )
);
