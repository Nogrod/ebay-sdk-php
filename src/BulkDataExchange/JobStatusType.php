<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing JobStatusType
 *
 * Enumerated type defining the possible states of a Bulk Data Exchange job.
 * XSD Type: JobStatus
 */
class JobStatusType
{

    /**
     * Constant for 'Created' value.
     *
     * The job ID and file reference ID have been created as a result of the
     *  <b>createUploadJobRequest</b> or the <b>startDownloadJobRequest</b>.
     */
    public const VAL_CREATED = 'Created';

    /**
     * Constant for 'Scheduled' value.
     *
     * The job has been internally scheduled for processing by the Bulk Data
     *  Exchange API.
     */
    public const VAL_SCHEDULED = 'Scheduled';

    /**
     * Constant for 'InProcess' value.
     *
     * Processing on the data file or the report has begun.
     */
    public const VAL_IN_PROCESS = 'InProcess';

    /**
     * Constant for 'Completed' value.
     *
     * Processing on the data file or the report has finished.
     */
    public const VAL_COMPLETED = 'Completed';

    /**
     * Constant for 'Aborted' value.
     *
     * The Bulk Data Exchange has been aborted due to the <b>abortJob</b> call.
     */
    public const VAL_ABORTED = 'Aborted';

    /**
     * Constant for 'Failed' value.
     *
     * The Bulk Data Exchange job has not completed successfully, due to
     *  incorrect data format, request errors, or Bulk Data Exchange
     *  API errors.
     */
    public const VAL_FAILED = 'Failed';

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
