'mysql' => array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'database', <------ Default name for database
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
),
'mysql' => array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'database', <------ Default name for database
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
),

APP_ENV=local
APP_DEBUG=true
APP_KEY=YOUR_API_KEY

DB_HOST=YOUR_HOST
DB_DATABASE=PROYECTO
DB_USERNAME=ricky
DB_PASSWORD=

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

DB::connection('system')->table('tenants')->all();

config(['database.connections.tenant.database' => 'tenant1']);

DB::purge('tenant');

DB::reconnect('tenant');

