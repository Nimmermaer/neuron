<?php
namespace MB\Neuron\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class SocialNetworkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MB\Neuron\Domain\Model\SocialNetwork
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MB\Neuron\Domain\Model\SocialNetwork();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIconReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setIconForIntSetsIcon()
    {
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );
    }
}
