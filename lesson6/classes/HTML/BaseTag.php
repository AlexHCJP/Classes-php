<?php

namespace HTML;

use HTML\Tag\Traits\HasAttribute;
use HTML\Tag\Traits\HasBody;
use HTML\Tag\Traits\HasName;

abstract class BaseTag
{

    use HasName;
    use HasAttribute;
    use HasBody;

    public function __construct(string $name)
    {
        $this->nameInit($name);
        $this->attributeInit();
        $this->bodyInit();
    }




    function __get($name)
    {
        return $this->getAttribute($name);
    }

    function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }


    //region GENERATING METHODS
    function start(): string {

        $str = "<{$this->name()}{$this->attributes()}";

        if ( $this->isSelfClosing() )
            $str .= " /";

        return "$str>";
    }

    function end(): string {

        if ( $this->isSelfClosing() )
            return '';

        return "</{$this->name()}>";
    }

    function __toString(): string {
        $body = $this->isSelfClosing()?'':$this->getBody();
        return $this->start() . $body . $this->end();
    }


    //endregion

    function appendTo(BaseTag $tag) {
        $tag->appendBody($this);
        return $this;
    }

    function prependTo(BaseTag $tag) {
        $tag->prependBody($this);
        return $this;
    }

}
