<?php

return [

    /**
     * Middleware to protect admin CRUD activities of Articles
     */
    'middleware' => [
        'web',
        'auth'
    ],

    /**
     * Determine softDelete function. Use this determine if the
     * article or post model should allow soft deleting as provided by laravel
     */
    'softdelete' => true,

    /**
     * Route prefix. You can change the prefix to suite your application 
     * design or need.
     */
    'prefix' => 'blogufy',


];