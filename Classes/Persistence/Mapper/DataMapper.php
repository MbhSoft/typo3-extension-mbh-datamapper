<?php
namespace MbhSoftware\MbhDatamapper\Persistence\Mapper;

class DataMapper extends \TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper
{

    /**
     * @param array $row
     * @param string $className
     * @return \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface
     */
    public function createObject($row, $className)
    {
        $object = $this->createEmptyObject($className);
        return $this->mapObject($object, $row);
    }

    /**
     * @param array $row
     * @param \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface $object
     * @return \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface
     */
    public function mapRowToObject(array $row, $object)
    {
        return $this->mapObject($object, $row);
    }

    /**
     * Maps a single row on an object of the given class
     *
     * @param \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface $object
     * @param array $row A single array with field_name => value pairs
     * @return \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface
     */
    protected function mapObject($object, array $row)
    {
        $this->thawProperties($object, $row);
        $object->_memorizeCleanState();
        return $object;
    }
}
