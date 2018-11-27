<?php
/**
 * @author: Andrii yakovlev <yawa20@gmail.com>
 * @since : 14.11.18
 */

namespace GepurIt\TinyintType;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Doctrine\DBAL\Types\Type;

/**
 * Class DoctrineType
 * @package GepurIt\TinyintType
 */
class TynyintDoctrineType extends Type
{
    const TYPE_NAME = 'tinyint';

    /**
     * @param $value
     * @param AbstractPlatform $platform
     * @return int
     * @throws ConversionException
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (null === $value) {
            return null;
        }

        if (!is_int($value)) {
            throw new ConversionException('Expected integer, got ' . gettype($value));
        }

        return $value;
    }

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return int
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if (null === $value) {
            return $value;
        }

        return (int) $value;
    }

    /**
     * Gets the SQL declaration snippet for a field of this type.
     *
     * @param array                                     $fieldDeclaration The field declaration.
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform         The currently used database platform.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'TINYINT(1)';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'Tynyint';
    }

    /**
     * Gets the name of this type.
     *
     * @return string
     */
    public function getName()
    {
        return self::TYPE_NAME;
    }
}
