<?php

namespace UAParser\Result;

/**
 * @author Benjamin Laugueux <benjamin@yzalis.com>
 */
interface BrowserResultInterface
{
    /**
     * Returns the browser family name.
     *
     * @return string|null
     */
    public function getFamily();

    /**
     * Returns the browser major version.
     *
     * @return int|null
     */
    public function getMajor();

    /**
     * Returns the browser minor version.
     *
     * @return int|null
     */
    public function getMinor();

    /**
     * Returns the browser patch version.
     *
     * @return int|null
     */
    public function getPatch();

    /**
    * Returns the browser full version, including the
    * major, minor and patch parts.
    *
    * @return string|null
    */
    public function getVersionString();

    /**
     * Returns the browser rendering engine.
     *
     * @return string|null
     */
    public function getRenderingEngine();

    /**
     * Extracts data from an array.
     *
     * @param array $data An array.
     */
    public function fromArray(array $data);
}
