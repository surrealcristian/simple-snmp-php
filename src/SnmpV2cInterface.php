<?php

namespace SurrealCristian\SimpleSnmp;

interface SnmpV2cInterface
{
    /**
     * GET command
     *
     * @param string  $host      Host
     * @param string  $community Community
     * @param string  $oid       OID
     * @param integer $timeout   Timeout in microseconds
     * @param integer $retries   Retries
     *
     * @return array
     */
    public function get($host, $community, $oid, $timeout, $retries);

    /**
     * GETNEXT command
     *
     * @param string  $host      Host
     * @param string  $community Community
     * @param string  $oid       OID
     * @param integer $timeout   Timeout in microseconds
     * @param integer $retries   Retries
     *
     * @return array
     */
    public function getNext($host, $community, $oid, $timeout, $retries);

    /**
     * WALK command
     *
     * @param string  $host      Host
     * @param string  $community Community
     * @param string  $oid       OID
     * @param integer $timeout   Timeout in microseconds
     * @param integer $retries   Retries
     *
     * @return array
     */
    public function walk($host, $community, $oid, $timeout, $retries);

    /**
     * BULKWALK command
     *
     * @param string  $host      Host
     * @param string  $community Community
     * @param string  $oid       OID
     * @param integer $timeout   Timeout in microseconds
     * @param integer $retries   Retries
     *
     * @return array
     */
    public function bulkWalk($host, $community, $oid, $timeout, $retries);

    /**
     * SET command
     *
     * @param string  $host      Host
     * @param string  $community Community
     * @param string  $oid       OID
     * @param string  $type      Type
     * @param string  $value     Value
     * @param integer $timeout   Timeout in microseconds
     * @param integer $retries   Retries
     *
     * @return array
     */
    public function set($host, $community, $oid, $type, $value, $timeout, $retries);
}
