<?php
namespace Swoole
{
    class Server extends \swoole_server{}
    class Client extends \swoole_client{}
    class Process extends \swoole_process{}
    class Timer extends \swoole_timer{}
    if (class_exists('\\swoole_redis', false))
    {
        class Redis extends \swoole_redis{}
    }
    if (class_exists('\\swoole_mysql', false))
    {
        class MySQL extends \swoole_mysql{}
    }
}

namespace Swoole\Server
{
    class Port extends \swoole_server_port{}
}

namespace Swoole\Http
{
    class Server extends \swoole_http_server{}
    class Client extends \swoole_http_client{}
    class Request extends \swoole_http_request{}
    class Response extends \swoole_http_response{}
}

namespace Swoole\WebSocket
{
    class Server extends \swoole_websocket_server{}
}