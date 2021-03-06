<?php

namespace Bug1801;

use PHPStan\TrinaryLogic;
use function PHPStan\Analyser\assertVariableCertainty;

function demo() : string {
	try {
		$response = 'OK';
	} catch (\Throwable $e) {
		$response = 'ERROR';
	} finally {
		assertVariableCertainty(TrinaryLogic::createYes(), $response);
		return $response;
	}
}
