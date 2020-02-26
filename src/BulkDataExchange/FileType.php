<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing FileType
 *
 * Simple type defining the file formats that can be specified in the <b>createUploadJob</b> request. Currently, XML is the only supported file format.
 * XSD Type: FileType
 */
class FileType
{

    /**
     * Constant for 'XML' value.
     *
     * This value indicates that XML will be used to upload and download files.
     */
    public const VAL_XML = 'XML';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
