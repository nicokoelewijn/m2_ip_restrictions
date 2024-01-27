<?php

namespace Nkdev\IpRestrictions\Traits;

use Nkdev\IpRestrictions\Constants\AllowedIps;

trait RemoteIpTrait
{
    /**
     * Verifies the remote IP address against a list of allowed IP addresses.
     *
     * @param string $remoteIp The remote IP address.
     *
     * @return bool True if the remote IP is allowed, false otherwise.
     */
    protected function validateRemoteIp($remoteIp)
    {
        $allowedIps = AllowedIps::IPS;

        return in_array($remoteIp, $allowedIps);
    }
}
