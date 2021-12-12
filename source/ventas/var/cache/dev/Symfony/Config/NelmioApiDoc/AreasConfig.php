<?php

namespace Symfony\Config\NelmioApiDoc;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class AreasConfig 
{
    private $pathPatterns;
    private $hostPatterns;
    private $namePatterns;
    private $withAnnotation;
    private $documentation;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function pathPatterns($value): self
    {
        $this->pathPatterns = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hostPatterns($value): self
    {
        $this->hostPatterns = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function namePatterns($value): self
    {
        $this->namePatterns = $value;
    
        return $this;
    }
    
    /**
     * whether to filter by annotation
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function withAnnotation($value): self
    {
        $this->withAnnotation = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function documentation(string $key, $value): self
    {
        $this->documentation[$key] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['path_patterns'])) {
            $this->pathPatterns = $value['path_patterns'];
            unset($value['path_patterns']);
        }
    
        if (isset($value['host_patterns'])) {
            $this->hostPatterns = $value['host_patterns'];
            unset($value['host_patterns']);
        }
    
        if (isset($value['name_patterns'])) {
            $this->namePatterns = $value['name_patterns'];
            unset($value['name_patterns']);
        }
    
        if (isset($value['with_annotation'])) {
            $this->withAnnotation = $value['with_annotation'];
            unset($value['with_annotation']);
        }
    
        if (isset($value['documentation'])) {
            $this->documentation = $value['documentation'];
            unset($value['documentation']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->pathPatterns) {
            $output['path_patterns'] = $this->pathPatterns;
        }
        if (null !== $this->hostPatterns) {
            $output['host_patterns'] = $this->hostPatterns;
        }
        if (null !== $this->namePatterns) {
            $output['name_patterns'] = $this->namePatterns;
        }
        if (null !== $this->withAnnotation) {
            $output['with_annotation'] = $this->withAnnotation;
        }
        if (null !== $this->documentation) {
            $output['documentation'] = $this->documentation;
        }
    
        return $output;
    }

}
