<?php

use TaxUae\Helper;
use TaxUae\Site;

function ct(): Site {
	return Site::getInstance();
}

function cth(): Helper {
	return Helper::getInstance();
}
