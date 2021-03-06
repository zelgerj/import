<?php

/**
 * TechDivision\Import\Actions\Processors\ProductPersistProcessor
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Actions\Processors;

/**
 * An abstract CRUD processor implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import
 * @link      http://www.techdivision.com
 */
abstract class AbstractProcessor implements ProcessorInterface
{

    /**
     * The utility class name with the SQL statements to use.
     *
     * @var string
     */
    protected $utilityClassName;

    /**
     * The PDO connection instance.
     *
     * @var \PDO
     */
    protected $connection;

    /**
     * Set's the passed utility class with the SQL statements to use.
     *
     * @param string $utilityClassName The utility class name
     *
     * @return void
     */
    public function setUtilityClassName($utilityClassName)
    {
        $this->utilityClassName = $utilityClassName;
    }

    /**
     * Return's the utility class with the SQL statements to use.
     *
     * @return string The utility class name
     */
    public function getUtilityClassName()
    {
        return $this->utilityClassName;
    }

    /**
     * Sets's the initialized PDO connection.
     *
     * @param \PDO $connection The initialized PDO connection
     *
     * @return void
     */
    public function setConnection(\PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Return's the initialized PDO connection.
     *
     * @return \PDO The initialized PDO connection
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
