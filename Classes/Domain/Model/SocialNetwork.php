<?php
namespace MB\Neuron\Domain\Model;

/***
 *
 * This file is part of the "Neuron Template" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Michael Blunck <mi.blunck@gmail.com>
 *
 ***/

/**
 * Class SocialNetwork
 * @package MB\Neuron\Domain\Model
 */
class SocialNetwork extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * icon
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $icon = '';

    /**
     * name
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * link
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $link = '';

    /**
     * Returns the icon
     * 
     * @return string $icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets the icon
     * 
     * @param string $icon
     * @return void
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the link
     * 
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     * 
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
}
