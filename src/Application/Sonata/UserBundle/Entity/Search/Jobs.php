<?php

namespace Application\Sonata\UserBundle\Entity\Search;

use Symfony\Component\Validator\Constraints as Assert;


class Jobs
{
    /**
     * Строка поиска по имени
     * @var string
     */
    public $name;

    /**
     * Строка поиска по описанию
     * @var string $opisanie
     */
    public $opisanie;


    /**
     * Строка поиска по навыкам
     *  @var string $navikOpit
     */
    public $navikOpit;

    /**
     * Строка поиска по типу работ
     *  @var string $navikOpit
     */
    public $tipRabot;

    /**
     * Строка поиска по обязанностям
     *  @var string $navikOpit
     */
    public $obaz;

    /**
     * Дата с которой искать вакансии
     * @var DateTime
     * @Assert\DateTime
     */
    public $dateFrom;

    /**
     * Дата, до которой искать вакансии
     * @var DateTime
     * @Assert\DateTime
     */
    public $dateTo;

    /**
     * Идентификатор компании
     * @var integer
     */

    public $compania;

}