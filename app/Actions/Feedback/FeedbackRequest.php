<?php 

namespace App\Actions\Feedback;

class FeedbackRequest
{
	private $name;

	private $phone_number;

	private $message;

	/**
	 * Class Constructor
	 * @param    $name   
	 * @param    $phone_number   
	 * @param    $message   
	 */
	public function __construct(string $name,string  $phone_number,string $message)
	{
		$this->name = $name;
		$this->phone_number = $phone_number;
		$this->message = $message;
	}

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}