<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */
if (!function_exists('routePath')) {
    /**
     * Returns the full url of a named route. Requires the app's base url to be declared in .env file.
     *
     * @param mixed $routeName
     */
    function routePath(string $routeName): string
    {
        return base_url(route_to($routeName));
    }
}

if (!function_exists('checkIfAuth')) {
    /**
     * Checks if there's a logged in user in the session.
     */
    function checkIfAuth(): bool
    {
        return session('isLoggedIn') ?? false;
    }
}

if (!function_exists('dumpAndExit')) {
    /**
     * Performs a var dump and exits the application.
     */
    function dumpAndExit(...$var): void
    {
        var_dump(...$var);

        exit();
    }
}
