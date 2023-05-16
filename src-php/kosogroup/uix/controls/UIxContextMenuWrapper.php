<?php

namespace kosogroup\uix\controls;

use php\gui\UXContextMenu;
use php\gui\UXMenuItem;

class UIxContextMenuWrapper
{
    public static function createWitoutWrapper() : self
    {
        return new self(new UXContextMenu);
    }

    protected $__contextMenu = null;
    public function __construct(UXContextMenu $contextMenu)
    {
        $this->__contextMenu = $contextMenu;
    }

    public function getUXNode()
    {
        return $this->__contextMenu;
    }

    public function addSeparator()
    {
        $this->__contextMenu->items->add(UXMenuItem::createSeparator());
    }

    public function addMenuItem(UIxMenuItem $menuItem)
    {
        $this->__contextMenu->items->add($menuItem);
        return $this;
    }
}
