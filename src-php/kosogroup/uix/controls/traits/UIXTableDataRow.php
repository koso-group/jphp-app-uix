<?php

namespace kosogroup\uix\controls\traits;

use php\gui\UXLabelEx;

trait UIXTableDataRow
{
    protected $__cellData = [];

    public function __call($method, $arguments)
    {
        if (substr_count($method, "CellData")) {
            $propertyName = explode('CellData', $method)[0];
            // позже проверять если строка то вызывать getCellData иначе есть UXNode то выдавать напрямую
            $cellData = $this->_getCellData($propertyName);
        
            $cellData->text = $this->$propertyName;
            return $cellData;
        }
    }

    private function _getCellData($propertyName)
    {
        if ($this->__cellData[$propertyName] == null)
            $this->__cellData[$propertyName] = new UXLabelEx();

        return $this->__cellData[$propertyName];
    }

    public function __set($propertyName, $value)
    {
        $this->$propertyName = $value;

        $cellData = $this->_getCellData($propertyName);
        $cellData->text = $value;
    }
    
}
