<?php

namespace HTML\Tag;

class TagName
{
    private $name;
    private $selfClosing;
    private const SELF_CLOSING_TAGS = [
        'area','base','br','col','embed','hr','img',
        'input','link','meta','param','source',
        'track','wbr','command','keygen','menuitem', 'Doctype'
    ];
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->selfClosing = in_array($name, self::SELF_CLOSING_TAGS);
    }
    public function isSelfClosing()
    {
        return $this->selfClosing;
    }
    public function getName(): string
    {
        return $this->name;
    }
    private function setName($name): void
    {
        $this->name = $name;
    }
    public function __toString()
    {
        return $this->getName();
    }
}