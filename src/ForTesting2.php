<?php

namespace Klapuch\DeadCodeTest;

use League\OAuth2\Server\CryptTrait;

final class ForTesting2
{
	use CryptTrait;
	use MyTrait;


	public function doSomething(): void
	{
		$this->doSomethingInTrait();
		echo 'FOO';
	}

}
