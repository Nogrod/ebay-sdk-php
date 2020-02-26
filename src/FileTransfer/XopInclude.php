<?php

namespace Nogrod\eBaySDK\FileTransfer;

class XopInclude
{
    private $href = null;

    public function getHref()
    {
        return $this->href;
    }

    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    public function __toString()
    {
        return '';
    }
}
