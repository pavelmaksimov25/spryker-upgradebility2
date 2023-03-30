<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace App\Services;

class ShiftyService
{
// Shifty code

    public const PRIVATE_IP_RANGE = [
        '10.0.0.0|10.255.255.255', // single class A network
        '172.16.0.0|172.31.255.255', // 16 contiguous class B network
        '192.168.0.0|192.168.255.255', // 256 contiguous class C network
        '169.254.0.0|169.254.255.255', // Link-local address also refered to as Automatic Private IP Addressing
        '127.0.0.0|127.255.255.255' // localhost
    ];

    public static function isPrivate(string $resourceName): bool
    {
        if (!self::isIp($resourceName)) {
            // Shifty code
            // should be used str_contains() instead
            return strpos($resourceName, 'localhost') !== false;
        }

        if ($ip = (ip2long($resourceName) !== -1)) {
            foreach (self::PRIVATE_IP_RANGE AS $privateAddress) {
                [$start, $end] = explode('|', $privateAddress);

                if ($ip >= ip2long($start) && $ip <= ip2long($end)) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function isIp(string $value): bool
    {
        return false !== filter_var($value, FILTER_VALIDATE_IP);
    }

    public static function getClientIp()
    {
        return $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'IP is not detected';
    }
}
