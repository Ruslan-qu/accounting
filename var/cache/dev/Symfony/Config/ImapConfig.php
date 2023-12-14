<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Imap'.\DIRECTORY_SEPARATOR.'ConnectionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ImapConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $connections;
    private $_usedProperties = [];

    public function connections(array $value = []): \Symfony\Config\Imap\ConnectionsConfig
    {
        $this->_usedProperties['connections'] = true;

        return $this->connections[] = new \Symfony\Config\Imap\ConnectionsConfig($value);
    }

    public function getExtensionAlias(): string
    {
        return 'imap';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('connections', $value)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = array_map(function ($v) { return new \Symfony\Config\Imap\ConnectionsConfig($v); }, $value['connections']);
            unset($value['connections']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['connections'])) {
            $output['connections'] = array_map(function ($v) { return $v->toArray(); }, $this->connections);
        }

        return $output;
    }

}
