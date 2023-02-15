<?php

ini_set( 'afterburner.redis_server_info', sprintf('rediss://:%s@%s:%d', getenv( 'REDIS_AUTH' ), getenv( 'REDIS_HOST' ), getenv( 'REDIS_PORT' ) ) );
ini_set( 'afterburner.redis_skip_server_check', 'yes' );
