<?php

namespace wcs;

class Hello
{

    private string $talk = 'Hello world!';

    public function __toString () :string
    {
return $this->talk;
    }

}