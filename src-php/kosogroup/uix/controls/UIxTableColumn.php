<?php

namespace kosogroup\uix\controls;

use php\gui\UXTableColumn;

class UIxTableColumn extends UXTableColumn
{
    public function withID(string $id) : UIXTableColumn
    {
        $this->id = $id;
        return $this;
    }


    public function withTitle(string $title) : UIXTableColumn
    {
        $this->text = $title;
        return $this;
    }

    public function withWidth(int $width) : UIXTableColumn
    {
        $this->width = $width;
        return $this;
    }

}