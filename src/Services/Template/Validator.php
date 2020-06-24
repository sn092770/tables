<?php

namespace LaravelEnso\Tables\Services\Template;

use LaravelEnso\Helpers\Services\Obj;
use LaravelEnso\Tables\Services\Template\Validators\Buttons\Buttons;
use LaravelEnso\Tables\Services\Template\Validators\Columns\Columns;
use LaravelEnso\Tables\Services\Template\Validators\Controls;
use LaravelEnso\Tables\Services\Template\Validators\Filters\Filters;
use LaravelEnso\Tables\Services\Template\Validators\Route;
use LaravelEnso\Tables\Services\Template\Validators\Structure\Attributes;
use LaravelEnso\Tables\Services\Template\Validators\Structure\Structure;

class Validator
{
    private Obj $template;

    public function __construct(Obj $template)
    {
        $this->template = $template;
    }

    public function run()
    {
        (new Structure($this->template))->validate();

        (new Attributes($this->template))->validate();

        (new Route($this->template))->validate();

        (new Buttons($this->template))->validate();

        (new Filters($this->template))->validate();

        (new Controls($this->template))->validate();

        (new Columns($this->template))->validate();
    }
}
