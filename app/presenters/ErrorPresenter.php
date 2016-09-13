<?php

namespace App\Presenters;

use Nette\Application\BadRequestException;
use Nette\Application\IPresenter;
use Nette\Application\Request;
use Nette\Application\Responses\CallbackResponse;
use Nette\Application\Responses\ForwardResponse;
use Nette\Object;
use Tracy\ILogger;


class ErrorPresenter extends Object implements IPresenter {
	/** @var ILogger */
	private $logger;

	public function __construct(ILogger $logger) {
		$this->logger = $logger;
	}

	/**
	 * @param Request $request
	 * @return CallbackResponse|ForwardResponse
	 */
	public function run(Request $request) {
		$e = $request->getParameter('exception');

		if ($e instanceof BadRequestException) {
			return new ForwardResponse($request->setPresenterName('Error4xx'));
		}

		$this->logger->log($e, ILogger::EXCEPTION);
		return new CallbackResponse(function () {
			require __DIR__ . '/templates/Error/500.phtml';
		});
	}

}
