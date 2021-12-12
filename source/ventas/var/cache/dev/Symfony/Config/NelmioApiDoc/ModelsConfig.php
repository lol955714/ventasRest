<?php

namespace Symfony\Config\NelmioApiDoc;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Models'.\DIRECTORY_SEPARATOR.'NamesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ModelsConfig 
{
    private $useJms;
    private $names;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useJms($value): self
    {
        $this->useJms = $value;
    
        return $this;
    }
    
    public function names(array $value = []): \Symfony\Config\NelmioApiDoc\Models\NamesConfig
    {
        return $this->names[] = new \Symfony\Config\NelmioApiDoc\Models\NamesConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['use_jms'])) {
            $this->useJms = $value['use_jms'];
            unset($value['use_jms']);
        }
    
        if (isset($value['names'])) {
            $this->names = array_map(function ($v) { return new \Symfony\Config\NelmioApiDoc\Models\NamesConfig($v); }, $value['names']);
            unset($value['names']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->useJms) {
            $output['use_jms'] = $this->useJms;
        }
        if (null !== $this->names) {
            $output['names'] = array_map(function ($v) { return $v->toArray(); }, $this->names);
        }
    
        return $output;
    }

}
