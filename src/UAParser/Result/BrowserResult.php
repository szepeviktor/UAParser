<?php

namespace UAParser\Result;

/**
 * @author Benjamin Laugueux <benjamin@yzalis.com>
 */
class BrowserResult implements BrowserResultInterface
{
    /**
     * @var string|null
     */
    private $family = null;

    /**
     * @var int|null
     */
    private $major = null;

    /**
     * @var int|null
     */
    private $minor = null;

    /**
     * @var int|null
     */
    private $patch = null;

    /**
     * @var string|null
     */
    private $versionString = null;

    /**
     * @var string|null
     */
    private $renderingEngine = null;

    /**
     * {@inheritDoc}
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * {@inheritDoc}
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * {@inheritDoc}
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionString()
    {
        if (null === $this->versionString) {
            $versionString = null !== $this->getMajor() ? (string)$this->getMajor() : '';
            $versionString = null !== $this->getMinor() ? $versionString.'.'.(string)$this->getMinor() : $versionString;
            $versionString = null !== $this->getPatch() ? $versionString.'.'.(string)$this->getPatch() : $versionString;

            $this->versionString = $versionString;
        }

        return $this->versionString;
    }

    /**
     * {@inheritDoc}
     */
    public function getRenderingEngine()
    {
        return $this->renderingEngine;
    }

    /**
     * {@inheritDoc}
     */
    public function getPatch()
    {
        return $this->patch;
    }

    public function __toString()
    {
        return $this->getFamily().' '.$this->getVersionString();
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray(array $data = array())
    {
        if (isset($data['family'])) {
            $this->family = (string) $data['family'];
        }
        if (isset($data['major'])) {
            $this->major = (int) $data['major'];
        }
        if (isset($data['minor'])) {
            $this->minor = (int) $data['minor'];
        }
        if (isset($data['patch'])) {
            $this->patch = (int) $data['patch'];
        }
    }
}
