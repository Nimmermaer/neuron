<?php
namespace MB\Neuron\Controller;

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
 * SocialNetworkController
 */
class SocialNetworkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * socialNetworkRepository
     * 
     * @var \MB\Neuron\Domain\Repository\SocialNetworkRepository
     * @inject
     */
    protected $socialNetworkRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $socialNetworks = $this->socialNetworkRepository->findAll();
        $this->view->assign('socialNetworks', $socialNetworks);
    }

    /**
     * action show
     * 
     * @param \MB\Neuron\Domain\Model\SocialNetwork $socialNetwork
     * @return void
     */
    public function showAction(\MB\Neuron\Domain\Model\SocialNetwork $socialNetwork)
    {
        $this->view->assign('socialNetwork', $socialNetwork);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \MB\Neuron\Domain\Model\SocialNetwork $newSocialNetwork
     * @return void
     */
    public function createAction(\MB\Neuron\Domain\Model\SocialNetwork $newSocialNetwork)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->socialNetworkRepository->add($newSocialNetwork);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \MB\Neuron\Domain\Model\SocialNetwork $socialNetwork
     * @ignorevalidation $socialNetwork
     * @return void
     */
    public function editAction(\MB\Neuron\Domain\Model\SocialNetwork $socialNetwork)
    {
        $this->view->assign('socialNetwork', $socialNetwork);
    }

    /**
     * action update
     * 
     * @param \MB\Neuron\Domain\Model\SocialNetwork $socialNetwork
     * @return void
     */
    public function updateAction(\MB\Neuron\Domain\Model\SocialNetwork $socialNetwork)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->socialNetworkRepository->update($socialNetwork);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \MB\Neuron\Domain\Model\SocialNetwork $socialNetwork
     * @return void
     */
    public function deleteAction(\MB\Neuron\Domain\Model\SocialNetwork $socialNetwork)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->socialNetworkRepository->remove($socialNetwork);
        $this->redirect('list');
    }
}
