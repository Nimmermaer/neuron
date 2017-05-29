<?php
namespace MB\Neuron\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class SocialNetworkControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MB\Neuron\Controller\SocialNetworkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MB\Neuron\Controller\SocialNetworkController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSocialNetworksFromRepositoryAndAssignsThemToView()
    {

        $allSocialNetworks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $socialNetworkRepository = $this->getMockBuilder(\MB\Neuron\Domain\Repository\SocialNetworkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $socialNetworkRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSocialNetworks));
        $this->inject($this->subject, 'socialNetworkRepository', $socialNetworkRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('socialNetworks', $allSocialNetworks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSocialNetworkToView()
    {
        $socialNetwork = new \MB\Neuron\Domain\Model\SocialNetwork();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('socialNetwork', $socialNetwork);

        $this->subject->showAction($socialNetwork);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSocialNetworkToSocialNetworkRepository()
    {
        $socialNetwork = new \MB\Neuron\Domain\Model\SocialNetwork();

        $socialNetworkRepository = $this->getMockBuilder(\MB\Neuron\Domain\Repository\SocialNetworkRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialNetworkRepository->expects(self::once())->method('add')->with($socialNetwork);
        $this->inject($this->subject, 'socialNetworkRepository', $socialNetworkRepository);

        $this->subject->createAction($socialNetwork);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSocialNetworkToView()
    {
        $socialNetwork = new \MB\Neuron\Domain\Model\SocialNetwork();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('socialNetwork', $socialNetwork);

        $this->subject->editAction($socialNetwork);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSocialNetworkInSocialNetworkRepository()
    {
        $socialNetwork = new \MB\Neuron\Domain\Model\SocialNetwork();

        $socialNetworkRepository = $this->getMockBuilder(\MB\Neuron\Domain\Repository\SocialNetworkRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialNetworkRepository->expects(self::once())->method('update')->with($socialNetwork);
        $this->inject($this->subject, 'socialNetworkRepository', $socialNetworkRepository);

        $this->subject->updateAction($socialNetwork);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSocialNetworkFromSocialNetworkRepository()
    {
        $socialNetwork = new \MB\Neuron\Domain\Model\SocialNetwork();

        $socialNetworkRepository = $this->getMockBuilder(\MB\Neuron\Domain\Repository\SocialNetworkRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialNetworkRepository->expects(self::once())->method('remove')->with($socialNetwork);
        $this->inject($this->subject, 'socialNetworkRepository', $socialNetworkRepository);

        $this->subject->deleteAction($socialNetwork);
    }
}
