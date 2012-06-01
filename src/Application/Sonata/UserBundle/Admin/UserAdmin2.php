<?php
namespace Application\Sonata\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class UserAdmin extends Admin
{
    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label' => 'Идентификатор'))
            ->add('firstName', null, array('label' => 'Имя'))
            ->add('lastName', null, array('label' => 'Фамилия'))
            ->add('status', null, array('label' => 'Статус'))
            ->add('dolzn', null, array('label' => 'Должность'))
            ->add('webSait', null, array('label' => 'Веб сайт'))
            ->add('group', null, array('label' => 'Идентификатор группы'))
            ->add('spec', null, array('label' => 'Идентификатор специальности'));
    }

    /**
     * Конфигурация формы редактирования записи
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('firstName', null, array('label' => 'Имя'))
            ->add('lastName', null, array('label' => 'Фамилия'))
            ->add('status', null, array('label' => 'Статус'))
            ->add('dolzn', null, array('label' => 'Должность'))

        //by_reference используется для того чтобы при трансформации данных запроса в объект сущности
        //которую выполняет Symfony Form Framework, использовался setter сущности News::setNewsLinks

            ->add('group', null, array('label' => 'Группа'))
            ->add('spec', null, array('label' => 'Специальность'))
            ->setHelps(array(
            'firstName' => 'Имя',
            'lastName' => 'Фамилия'
        ));
    }

    /**
     * Конфигурация списка записей
     *
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('firstName', null, array('label' => 'Имя'))
            ->add('status', null, array('label' => 'Статус'))
            ->add('group', null, array('label' => 'Категория'));
    }

    /**
     * Поля, по которым производится поиск в списке записей
     *
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('firstName', null, array('label' => 'Имя'));
    }

    /**
     * Конфигурация левого меню при отображении и редатировании записи
     *
     * @param \Knp\Menu\ItemInterface $menu
     * @param $action
     * @param null|\Sonata\AdminBundle\Admin\Admin $childAdmin
     *
     * @return void
     */
    protected function configureSideMenu(MenuItemInterface $menu, $action, Admin $childAdmin = null)
    {
        $menu->addChild(
            $action == 'edit' ? 'Просмотр пользователя' : 'Редактирование данных пользователя',
            array('uri' => $this->generateUrl(
                $action == 'edit' ? 'show' : 'edit', array('id' => $this->getRequest()->get('id'))))
        );
    }
}