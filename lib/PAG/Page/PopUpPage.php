<?php
/**
 * Created by PhpStorm.
 * User: pierreantoine
 * Date: 16/10/18
 * Time: 00:03
 */

namespace PAG\Page;


use PAG\Page\Composite\CompositeComponent;
use PAG\Page\Elements\PageContent;
use PAG\Page\Elements\PageHeader;

class PopUpPage extends CompositeComponent
{
    public function __construct(PageHeader $header, PageContent $content)
    {
        $this->setComponents($header, $content);
    }
}