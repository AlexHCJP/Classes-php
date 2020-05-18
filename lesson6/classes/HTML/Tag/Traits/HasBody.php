<?php


namespace HTML\Tag\Traits;


use HTML\Tag\TagBody;

trait HasBody
{
    protected $body;
    protected function bodyInit()
    {
        $this->body = new TagBody();
    }

    function getBody(){
        return $this->body;
    }

    function appendBody($value) {
        $this->body->append($value);
        return $this;
    }

    function prependBody($value) {
        $this->body->prepend($value);
        return $this;
    }
}