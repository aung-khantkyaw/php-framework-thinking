<?php
class Router
{
    private $routes = [];

    public function get($url, $handler)
    {
        $this->routes[] = ['GET', $url, $handler];
    }

    public function post($url, $handler)
    {
        $this->routes[] = ['POST', $url, $handler];
    }

    public function dispatch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');
        $uri = empty($uri) ? '/' : $uri;
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            list($routeMethod, $routeUrl, $handler) = $route;

            if ($method === $routeMethod) {
                // Convert route pattern to regex
                $pattern = str_replace('/', '\/', $routeUrl);
                $pattern = '/^' . preg_replace('/\{(\w+)\}/', '(?<$1>[^\/]+)', $pattern) . '$/';

                // Match the route
                if (preg_match($pattern, $uri, $matches)) {
                    // Call the handler
                    $this->callHandler($handler, $matches);
                    return;
                }
            }
        }

        // No matching route found
        $this->notFound();
    }

    private function callHandler($handler, $matches)
    {
        list($controllerName, $action) = explode('@', $handler);
        $controllerFile = 'app/controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            include_once $controllerFile;

            $controllerClass = $controllerName;
            $controllerInstance = new $controllerClass();

            if (method_exists($controllerInstance, $action)) {
                $controllerInstance->$action($matches);
            } else {
                $this->notFound();
            }
        } else {
            $this->internalServerError();
        }
    }

    private function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }

    private function internalServerError()
    {
        header("HTTP/1.0 500 Internal Server Error");
        echo "500 Internal Server Error: Controller not found";
    }
}
