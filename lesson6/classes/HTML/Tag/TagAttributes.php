<?php

namespace HTML\Tag;

class TagAttributes
{
    private  $attributes = [];
    public function setAttributes(string $key, $value): void
    {
        $this->attributes[$key] = $value;
    }
    public function getAttributes(string $key)
    {
        return $this->attributes[$key];
    }
    function append(string $key, $value)
    {
        $this->$key .= $value;
    }
    function prepend(string $key, $value)
    {
        $this->$key = $value . $this->$key;
    }
    public function __set($key, $value)
    {
        $this->setAttributes($key, $value);
    }
    public function __get($key)
    {
        return $this->getAttributes($key);
    }
    function keys(){
        return array_keys($this->attributes) ?? null;
    }
    public function __toString():string
    {
        $result = '';
        foreach ($this->keys() as $key)
        {
            $result .= " {$key}=\"{$this->$key}\"";
        }
        return $result;
    }
}