<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexey
 * Date: 17.04.12
 * Time: 20:13
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Sonata\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Sonata\UserBundle\Entity\Spec;
use Application\Sonata\UserBundle\Entity\Grouppa;
use Application\Sonata\UserBundle\Entity\Compania;
use Application\Sonata\UserBundle\Entity\Valansia;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class FixtureLoader implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
       /* // создание специальностей
        $spec = new Spec();
        $spec->setName('ПОВТ');
        $spec->setLongName('Программное обеспечение вычислительной техники');
        $spec->setInfoSpec('Программное');
        $spec->setSroc('5');
        $spec->setVipuskKaf('ПМ');
        // создание группы
        $group = new Grouppa();
        $group->setGrName('ПОВТ-62');
        $group->setKurs('2');
        $group->setSemestr('4');
        $group->setSpec($spec);

        $manager->persist($spec);
        $manager->persist($group);
        $manager->flush();

        // создание группы
        $group = new Grouppa();
        $group->setGrName('ПОВТ-52');
        $group->setKurs('2');
        $group->setSemestr('4');
        $group->setSpec($spec);

        $manager->persist($group);
        $manager->flush();

        // создание группы
        $group = new Grouppa();
        $group->setGrName('ПОВТ-73');
        $group->setKurs('2');
        $group->setSemestr('4');
        $group->setSpec($spec);

        $manager->persist($group);
        $manager->flush();

        // создание группы
        $group = new Grouppa();
        $group->setGrName('ПОВТ-12');
        $group->setKurs('2');
        $group->setSemestr('4');
        $group->setSpec($spec);

        $manager->persist($group);
        $manager->flush();

        // создание специальности
        $spec = new Spec();
        $spec->setName('ПГС');
        $spec->setLongName('Промышленное и гражданское строительство');
        $spec->setInfoSpec('Стоительство');
        $spec->setSroc('5');
        $spec->setVipuskKaf('ГС');

        // создание группы
        $group = new Grouppa();
        $group->setGrName('ПГС-45');
        $group->setKurs('3');
        $group->setSemestr('6');
        $group->setSpec($spec);

        $manager->persist($spec);
        $manager->persist($group);
        $manager->flush();  */
        //////////////////////////////////////////////////////////////////////////////////////////////////////


        // создание специальности
        $spec = new Spec();
        $spec->setName('КиРС');
        $spec->setLongName('Котло-реакторо строение');
        $spec->setInfoSpec('Стоительство');
        $spec->setSroc('5');
        $spec->setVipuskKaf('КВ');

        // создание группы
        $group = new Grouppa();
        $group->setGrName('КиРС-09');
        $group->setKurs('3');
        $group->setSemestr('6');
        $group->setSpec($spec);

        $manager->persist($spec);
        $manager->persist($group);
        $manager->flush();

        // создание группы
        $group = new Grouppa();
        $group->setGrName('КиРС-08');
        $group->setKurs('5');
        $group->setSemestr('9');
        $group->setSpec($spec);

        $manager->persist($group);
        $manager->flush();

        // создание группы
        $group = new Grouppa();
        $group->setGrName('КиРС-03');
        $group->setKurs('1');
        $group->setSemestr('2');
        $group->setSpec($spec);

        $manager->persist($group);
        $manager->flush();

        // создание группы
        $group = new Grouppa();
        $group->setGrName('КиРС-05');
        $group->setKurs('6');
        $group->setSemestr('12');
        $group->setSpec($spec);

        $manager->persist($group);
        $manager->flush();



        //Создание компании
        $compania=new Compania();
        $compania->setName('ФОМ.РУ');
        $compania->setAdres('пер. Капранова, д.3');
        $compania->setSite('fom.ru');
        $compania->setTelefon('+7 495 7458908');

        $vakansia=new Valansia();
        $vakansia->setName('php-программист');
        $vakansia->setCompania($compania);
        $vakansia->setTimeRazmech(new \DateTime('tomorrow'));
        $vakansia->setNavikOpit('Ищем талантливого разработчика с широким кругозором и разносторонним опытом работы.');
        $vakansia->setObazannosti('Разработка архитектур систем под хайлоуд;
         Разработка пользовательских и клиентских сервисов крупных проектов;
         Разработка парсеров, трансляторов, конверторов любой сложности;
         Разработка собственных API для сервисов и систем;
         Разработка приложений для соц сетей;
         Использование API соц сетей;
         Доработка и совершенствование внутренней CMS;
         Настройки поисковых движков (Sphinx, Lucene SOLR);
         UNIX администрирование;
         Использование MVC при разработке;
         Работа с базой данных MySQL/ PostgreSQL;
         Работа с SVN;
         Работа с noSQL (Redis, Memcache);
         Использование базовых знаний языков Objective-C и Python;
         Использование ООП.');
        $vakansia->setTipRab('Полная занятость');
        $vakansia->setZarplata('80000 P');
        // ...
        $manager->persist($compania);
        $manager->persist($vakansia);
        $manager->flush();


        //Создание компании
        $compania=new Compania();
        $compania->setName('Компания Альфа');
        $compania->setAdres('ул. Федюнинского,17, к. 2-1');
        $compania->setSite('http://www.alfagomel.by');
        $compania->setTelefon('+375 232 68 27 39');

        $vakansia=new Valansia();
        $vakansia->setName('инженер-программист');
        $vakansia->setCompania($compania);
        $vakansia->setTimeRazmech(new \DateTime('tomorrow'));
        $vakansia->setNavikOpit('Без опыта');
        $vakansia->setObazannosti('Разработка и поддержка прикладного программного обеспечения, взаимодействие с клиентами');
        $vakansia->setTipRab('5-дневная рабочая неделя');
        $vakansia->setOpisanie('Система оплаты: оклад + %
        График работы: 5-дневная рабочая неделя
         Мобильная связь оплачивается в рамках установленного лимита, работникам с водительским удостоверением для рабочих поездок предоставляется автотранспорт
         Требования к кандидату:
         Образование: высшее
         Водительские права: кат.B
         Среда разработки Delphi+SQL и/или Java, GWT, аналитический склад ума, коммуникабельность, ответственность');
        $vakansia->setZarplata('Договорная');
        // ...
        $manager->persist($compania);
        $manager->persist($vakansia);
        $manager->flush();


        //Создание компании
        $compania=new Compania();
        $compania->setName('RUSSIAN PROMO');
        $compania->setAdres('г. Москва, 1-ый Кожевнический переулок, д. 6 строение 1');
        $compania->setSite('russianpromo.ru');
        $compania->setTelefon('89038457054');

        $vakansia=new Valansia();
        $vakansia->setName('php-программист');
        $vakansia->setCompania($compania);
        $vakansia->setTimeRazmech(new \DateTime('tomorrow'));
        $vakansia->setNavikOpit('1-3 года.');
        $vakansia->setObazannosti('Разработка Intranet решений на ASP.NET, С #, с применением MS SQL');
        $vakansia->setTipRab('Полная занятость');
        $vakansia->setZarplata('70000 P');
        $vakansia->setOpisanie('
         • Владение C/С++/С;
         • Опыт работы с .NET Framework 4.0, VS2010, SVN, знание ASP.NET, С # и MS SQL 2008.
         • Умение работы в команде;
         • Опыт разработки коммерческих продуктов;
         • Навыки проектирования систем.');

        // ...
        $manager->persist($compania);
        $manager->persist($vakansia);
        $manager->flush();

        //Создание компании
        $compania=new Compania();
        $compania->setName('ООО NET');
        $compania->setAdres('Дубаи, Internet city');
        $compania->setSite('http://zvonok.uz');
        $compania->setTelefon('+971 50 203 4545');

        $vakansia=new Valansia();
        $vakansia->setName('Программист iOS для мобильных приложений iPhone');
        $vakansia->setCompania($compania);
        $vakansia->setTimeRazmech(new \DateTime('tomorrow'));
        $vakansia->setNavikOpit('1-3 года.');
        $vakansia->setObazannosti('- Оптимальный алгоритм
             - Работа с классами
             - Работа с передачей данных (интернет)
             - Работоспособность с Базы Данных
             - Оперативная работа
             - Комментированных код
             - быть в он-лайн минимум час в день');
        $vakansia->setTipRab('Полная занятость');
        $vakansia->setZarplata('Договорная');
        $vakansia->setOpisanie('Нужен программист iOS для мобильных приложений iPhone. Периодически развиваюшаяся программа, каждый месяц будут обновления. Нужен программист с опытом. ');

        // ...
        $manager->persist($compania);
        $manager->persist($vakansia);
        $manager->flush();


        //Создание компании
        $compania=new Compania();
        $compania->setName('КА ПРОФИТ-М');
        $compania->setAdres('ул. Печёрская, 18А, 3 эт, оф.1');
        $compania->setSite('makmark.ru');
        $compania->setTelefon('(846)2607170');

        $vakansia=new Valansia();
        $vakansia->setName('Программист 1С');
        $vakansia->setCompania($compania);
        $vakansia->setTimeRazmech(new \DateTime('tomorrow'));
        $vakansia->setNavikOpit('1-3 года.');

        $vakansia->setTipRab('Полная занятость');
        $vakansia->setZarplata('90 000 P');
        $vakansia->setOpisanie('Программист 1С, в/о, о/р от 1 года (программирование 1С: 8). Разработка, написание и внедрение конфигурации на основе 1С: 8.х. Работа с базами данных, алгоритмами, отчетностью. Проживание и работа в Москве. З/пл на и/с (1-2 месяца) от 50000 руб., затем 90000 руб. (в индивидуальном порядке размер оклада может быть увеличен) + премии + компенсации + страховка ДМС. Проживание в Москве за счет компании. Оформление по ТК РФ. Помощь в повышении квалификации (оплата сертификатов). Возможность карьерного роста. Код ЕЕ-438.');

        // ...
        $manager->persist($compania);
        $manager->persist($vakansia);
        $manager->flush();

        //Создание компании
        $compania=new Compania();
        $compania->setName('КА "First"');
        $compania->setAdres('г. Москва, Большой Каретный переулок д.21 к.1 офис 205');
        $compania->setSite('  www.firstpersonal.ru');
        $compania->setTelefon('(495)792-21-94');

        $vakansia=new Valansia();
        $vakansia->setName('Программист PHP');
        $vakansia->setCompania($compania);
        $vakansia->setTimeRazmech(new \DateTime('tomorrow'));
        $vakansia->setNavikOpit('3-6 года.');
        $vakansia->setObazannosti('PHP 5 (желательно и 5.3);ООП; MYSQL 5 или POSTGRESQL 8-9;Javascript + JQuery;AJAX;HTML + CSS – умение и желание верстать валидный код;Паттерны проектирования.');
        $vakansia->setTipRab('Полная занятость');
        $vakansia->setZarplata('Оклад от 90000 рублей до 110000 рублей');
        $vakansia->setOpisanie('Написание программного кода, сопровождение текущих модулей и программных решений
 Оптимизация структуры БД и запросов
 Участие в обсуждении технических особенностей и планов развития');

        // ...
        $manager->persist($compania);
        $manager->persist($vakansia);
        $manager->flush();
    }
}