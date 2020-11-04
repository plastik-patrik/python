<?php

# api.domain.com

$response = Array	(	'ok' => false,
						'error_code' => 401,
						'description' => 'Unauthorized'
					);

echo json_encode($response);