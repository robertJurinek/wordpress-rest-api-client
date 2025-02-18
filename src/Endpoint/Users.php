<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Users
 * @package Vnn\WpApiClient\Endpoint
 */
class Users extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint($path = '')
    {
        return '/wp-json/wp/v2/users';
    }
}
