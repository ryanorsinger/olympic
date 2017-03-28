<?php 

function pageController() {
	$data = [
		'pageNumber' => 2;
		'resultsPerPage' => 25;
	];

	return $data;
}

extract(pageController());

echo $pageNumber;

echo $resultsPerPage;

