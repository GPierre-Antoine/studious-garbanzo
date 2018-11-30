<?php
/**
 * Created by PhpStorm.
 * User: pierreantoine
 * Date: 16/10/18
 * Time: 00:07
 */

namespace PAG\Page\Composite;


class CompositeComponent implements Component
{
    /** @var Component[] */
    private $components;

    public function setComponents(Component ... $components)
    {
        $this->components = $components;
    }

    public function render()
    {
        foreach ($this->components as $component) {
            $component->render();
        }
    }
}