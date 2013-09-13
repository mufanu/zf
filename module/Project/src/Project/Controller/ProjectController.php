<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 12.09.13
 * Time: 0:37
 * To change this template use File | Settings | File Templates.
 */

namespace Project\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Project\Entity;
use Project\Entity\Project;
use Project\Form\ProjectForm;

class ProjectController extends AbstractActionController
{
    public function indexAction()
    {
        $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        $projects = $objectManager
            ->getRepository('\Project\Entity\Project')
            ->findBy(array('state' => Project::PUBLISHED), array('created' => 'DESC'));

        $view = new ViewModel(array(
                                   'projects' => $projects,
                              ));

        return $view;
    }

    public function viewAction()
    {
        return new ViewModel();
    }

    public function addAction()
    {
        $form = new ProjectForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

                $project = new Project();
                $project->exchangeArray($form->getData());
                $project->setCreated(time());
                $project->setUserId(0);
                $objectManager->persist($project);
                $objectManager->flush();
                $message = 'Blogpost succesfully saved!';
                $this->flashMessenger()->addMessage($message);

                return $this->redirect()->toRoute('project');
            }
            else {
                $message = 'Error while saving blogpost';
                $this->flashMessenger()->addErrorMessage($message);
            }
        }
        return array('form' => $form);
    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }
}