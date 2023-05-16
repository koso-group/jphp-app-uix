<?php

namespace kosogroup\uix\controls;

use php\gui\UXMenuItem;

class UIxMenuItem extends UXMenuItem
{   
    public function withTitle($text) : self
    {
        $this->text = $text;
        return $this;
    }

    public function withIcon()
    {
        return $this;
    }

    public function withAction(\Closure $actionClosure)
    {
        $this->on('action', $actionClosure);
        return $this;
    }
}   