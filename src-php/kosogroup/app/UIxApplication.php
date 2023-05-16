<?php
namespace kosogroup\app;

use php\gui\UXApplication;

abstract class UIxApplication extends Application
{
    public abstract function launch();

    public function start()
    {
        UXApplication::runLater( fn() => $this->launch() );
    }
}