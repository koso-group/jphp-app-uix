<?php

namespace kosogroup\uix\controls;

use php\gui\UXTableColumn;
use php\gui\UXTableView;

class UIxTableWrapper
{
    public static function createWitoutWrapper() : self
    {
        return new self(new UXTableView);
    }

    protected $__tableView = null;
    public function __construct(UXTableView $tableView)
    {
        $this->__tableView = $tableView;
    }

    public function getUXNode()
    {
        return $this->__tableView;
    }

    public function addColumn(UXTableColumn $tableColumn) : self
    {
        $this->__tableView->columns->add($tableColumn);
        return $this;
    }


    public function addRowItem($rowItem)
    {
        $item = [];
        foreach($this->__tableView->columns as $tableColumn)
        {
            $item[ $tableColumn->id ] = $rowItem->{$tableColumn->id . "CellData"}();
        }

        $item['__dto'] = $rowItem;

        $this->__tableView->items->add($item);
    }

}