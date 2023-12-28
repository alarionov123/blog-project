<?php

namespace App;

class Router
{
    private static $list = [];

    /**
     * Method creates a route to pages
     * @param $uri
     * @param $page_name
     * @param $area
     * @return void
     */

    public static function page($uri, $page_name, $area)
    {
        self::$list[] = [
            'uri' => $uri,
            'page_name' => $page_name,
            'area' => $area,
        ];
    }

    /**
     * Method enables route and includes a needed php file
     * @return void
     */
    public static function enable()
    {
        $query = isset($_GET['q']) ? '/' . $_GET['q'] : '';

        foreach (self::$list as $route) {
            if ($route['uri'] === $query) {
                require_once 'app/' . $route['area'] . '/' . $route['page_name'] . '.php';
                die();
            }
        }
        self::notFound();
    }

    /**
     * Method returns 404 page if the route is not found
     * @return mixed
     */
    private static function notFound()
    {
        return require_once '404.php';
    }

    public static function redirect($page)
    {
        header("Location: " . $page);
        exit;
    }
}