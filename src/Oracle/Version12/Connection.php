<?php

declare(strict_types=1);

namespace Atk4\Dsql\Oracle\Version12;

use Atk4\Dsql\Oracle\Connection as BaseConnection;

class Connection extends BaseConnection
{
    protected $query_class = Query::class;

    protected static function connectDbalConnection(array $dsn)
    {
        $dsn['dsn'] = str_replace('oci12:', 'oci:', $dsn['dsn']);

        return parent::connectDbalConnection($dsn);
    }
}
