<?php

namespace Symfony\Config\NelmioApiDoc\Models;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class NamesConfig 
{
    private $alias;
    private $type;
    private $groups;
    private $areas;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function alias($value): self
    {
        $this->alias = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function groups($value = NULL): self
    {
        $this->groups = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function areas($value): self
    {
        $this->areas = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['alias'])) {
            $this->alias = $value['alias'];
            unset($value['alias']);
        }
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (isset($value['groups'])) {
            $this->groups = $value['groups'];
            unset($value['groups']);
        }
    
        if (isset($value['areas'])) {
            $this->areas = $value['areas'];
            unset($value['areas']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->alias) {
            $output['alias'] = $this->alias;
        }
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
        if (null !== $this->groups) {
            $output['groups'] = $this->groups;
        }
        if (null !== $this->areas) {
            $output['areas'] = $this->areas;
        }
    
        return $output;
    }

}
