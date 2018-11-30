<?php
/**
 * Created by PhpStorm.
 * User: pierreantoine
 * Date: 16/10/18
 * Time: 00:17
 */

namespace PAG\Page;


use PAG\Page\Composite\CompositeComponent;
use PAG\Page\Elements\PageContent;
use PAG\Page\Elements\PageFooter;
use PAG\Page\Elements\PageHeader;

class FullPage extends CompositeComponent
{
    public function __construct(PageHeader $header, PageContent $content, PageFooter $footer)
    {
        $this->setComponents($header, $content, $footer);
    }
}