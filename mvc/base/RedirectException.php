<?php
namespace Base;

class RedirectException extends \Exception
{
    private $url;
    publiс function __construct(string $url)
    {
        $this->url = $url;
    }
    public function getUrl(): string
    {
        return $this->url;
    }
}