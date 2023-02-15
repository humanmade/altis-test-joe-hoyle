<?php

ini_set( 'afterburner.redis_server_info', sprintf('redis://%s:%d', getenv( 'REDIS_HOST' ), getenv( 'REDIS_PORT' ) ) );
