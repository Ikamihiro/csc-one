<?php

namespace Lib;

class Response
{
    public function setStatusCode(int $statusCode)
    {
        http_response_code($statusCode);

        return $this;
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function json($data, $statusCode = 200)
    {
        $this->setStatusCode($statusCode);

        header('Content-Type: application/json');

        return json_encode($data);
    }
}
