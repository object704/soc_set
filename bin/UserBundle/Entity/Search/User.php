<?php

namespace Acme\UserBundle\Entity\Search;

use Symfony\Component\Validator\Constraints as Assert;


class User
{
    /**
     * Строка поиска по имени
     * @var string
     */
    public $firstName;

    /**
     * Строка поиска по фамилии
     * @var string $lastName
     */
    public $lastName;


    /**
     * Идентификатор группы студента
     * @var integer
     */
    public $group;

    /**
     * Идентификатор специальности
     * @var integer
     */
    public $spec;

}