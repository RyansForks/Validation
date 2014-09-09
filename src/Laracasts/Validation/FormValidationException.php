<?php namespace Laracasts\Validation;

use Illuminate\Support\MessageBag;
use Illuminate\Support\Contracts\MessageProviderInterface;

class FormValidationException extends \Exception implements MessageProviderInterface {

	/**
	 * @var MessageBag
	 */
	protected $errors;

	/**
	 * @param string     $message
	 * @param MessageBag $errors
	 */
	function __construct($message, MessageBag $errors)
	{
		$this->errors = $errors;

		parent::__construct($message);
	}

	/**
	 * Get form validation errors
	 *
	 * @return \Illuminate\Support\MessageBag
	 */
	public function getErrors()
	{
		return $this->errors;
	}

    /**
     * @return \Illuminate\Support\MessageBag
     */
    public function getMessageBag()
    {
        return $this->getErrors();
    }

}