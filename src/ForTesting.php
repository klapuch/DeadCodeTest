<?php

namespace Klapuch\DeadCodeTest;

use League\OAuth2\Server\CryptTrait;

final class ForTesting
{
	use CryptTrait;
	use MyTrait;


	public function doSomething(): void
	{
		echo 'FOO';
	}

}
