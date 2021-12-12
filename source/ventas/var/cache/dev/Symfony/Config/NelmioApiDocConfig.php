<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'AreasConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'ModelsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class NelmioApiDocConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $documentation;
    private $mediaTypes;
    private $areas;
    private $models;
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function documentation(string $key, $value): self
    {
        $this->documentation[$key] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function mediaTypes($value): self
    {
        $this->mediaTypes = $value;
    
        return $this;
    }
    
    public function areas(string $name, array $value = []): \Symfony\Config\NelmioApiDoc\AreasConfig
    {
        if (!isset($this->areas[$name])) {
            return $this->areas[$name] = new \Symfony\Config\NelmioApiDoc\AreasConfig($value);
        }
        if ([] === $value) {
            return $this->areas[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "areas()" has already been initialized. You cannot pass values the second time you call areas().');
    }
    
    public function models(array $value = []): \Symfony\Config\NelmioApiDoc\ModelsConfig
    {
        if (null === $this->models) {
            $this->models = new \Symfony\Config\NelmioApiDoc\ModelsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "models()" has already been initialized. You cannot pass values the second time you call models().');
        }
    
        return $this->models;
    }
    
    public function getExtensionAlias(): string
    {
        return 'nelmio_api_doc';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['documentation'])) {
            $this->documentation = $value['documentation'];
            unset($value['documentation']);
        }
    
        if (isset($value['media_types'])) {
            $this->mediaTypes = $value['media_types'];
            unset($value['media_types']);
        }
    
        if (isset($value['areas'])) {
            $this->areas = array_map(function ($v) { return new \Symfony\Config\NelmioApiDoc\AreasConfig($v); }, $value['areas']);
            unset($value['areas']);
        }
    
        if (isset($value['models'])) {
            $this->models = new \Symfony\Config\NelmioApiDoc\ModelsConfig($value['models']);
            unset($value['models']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->documentation) {
            $output['documentation'] = $this->documentation;
        }
        if (null !== $this->mediaTypes) {
            $output['media_types'] = $this->mediaTypes;
        }
        if (null !== $this->areas) {
            $output['areas'] = array_map(function ($v) { return $v->toArray(); }, $this->areas);
        }
        if (null !== $this->models) {
            $output['models'] = $this->models->toArray();
        }
    
        return $output;
    }

}
