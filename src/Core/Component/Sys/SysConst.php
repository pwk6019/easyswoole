<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/9/10
 * Time: 下午5:10
 */

namespace Core\Component\Sys;


class SysConst
{
    const DI_ERROR_HANDLER = 'DI_ERROR_HANDLER';
    const DI_LOGGER_WRITER = 'DI_LOGGER_WRITER';
    const CONTROLLER_MAX_DEPTH = 'CONTROLLER_MAX_DEPTH';
    const APPLICATION_DIR = 'APPLICATION_DIR';//定义应用目录（以便支持例如多域名部署需求）
    const SHARE_MEMORY_FILE = 'SHARE_MEMORY_FILE';
    const TEMP_DIRECTORY = 'TEMP_DIRECTORY';
    const LOG_DIRECTORY = 'LOG_DIRECTORY';
    const VERSION_CONTROL = 'VERSION_CONTROL';
}