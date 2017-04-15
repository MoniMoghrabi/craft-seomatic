<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\base;

use craft\base\Model;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
abstract class Container extends Model implements ContainerInterface
{
    // Traits
    // =========================================================================

    use ContainerTrait;

    // Static Properties
    // =========================================================================

    // Static Methods
    // =========================================================================

    /**
     * Create a new Meta Container
     *
     * @param array $config
     *
     * @return null|Container
     */
    public static function create($config = [])
    {
        /** @var $model Container */
        $model = null;
        $className = self::className();
        $model = new $className($config);
        $model->normalizeContainerData();

        return $model;
    }

    // Public Properties
    // =========================================================================

    /**
     * The data in this container
     *
     * @var array
     */
    public $data = [];

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function addData($data, string $key): void
    {
        $this->data[$key] = $data;
    }

    /**
     * @inheritdoc
     */
    public function render(): string
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function normalizeContainerData(): void
    {
    }

    // Private Methods
    // =========================================================================

}