<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Covid API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\Client\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Utla
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
        'S12000033' => 'aberdeenCity',
        'S12000034' => 'aberdeenshire',
        'S12000041' => 'angus',
        'N09000001' => 'antrimAndNewtownabbey',
        'N09000011' => 'ardsAndNorthDown',
        'S12000035' => 'argyllAndBute',
        'N09000002' => 'armaghCityBanbridgeAndCraigavon',
        'E09000002' => 'barkingAndDagenham',
        'E09000003' => 'barnet',
        'E08000016' => 'barnsley',
        'E06000022' => 'bathAndNorthEastSomerset',
        'E06000055' => 'bedford',
        'N09000003' => 'belfast',
        'E09000004' => 'bexley',
        'E08000025' => 'birmingham',
        'E06000008' => 'blackburnWithDarwen',
        'E06000009' => 'blackpool',
        'W06000019' => 'blaenauGwent',
        'E08000001' => 'bolton',
        'E06000058' => 'bournemouthChristchurchAndPoole',
        'E06000036' => 'bracknellForest',
        'E08000032' => 'bradford',
        'E09000005' => 'brent',
        'W06000013' => 'bridgend',
        'E06000043' => 'brightonAndHove',
        'E06000023' => 'bristolCityOf',
        'E09000006' => 'bromley',
        'E10000002' => 'buckinghamshire',
        'E08000002' => 'bury',
        'W06000018' => 'caerphilly',
        'E08000033' => 'calderdale',
        'E10000003' => 'cambridgeshire',
        'E09000007' => 'camden',
        'W06000015' => 'cardiff',
        'W06000010' => 'carmarthenshire',
        'N09000004' => 'causewayCoastAndGlens',
        'E06000056' => 'centralBedfordshire',
        'W06000008' => 'ceredigion',
        'E06000049' => 'cheshireEast',
        'E06000050' => 'cheshireWestAndChester',
        'S12000036' => 'cityOfEdinburgh',
        'S12000005' => 'clackmannanshire',
        'W06000003' => 'conwy',
        'E06000052' => 'cornwallAndIslesOfScilly',
        'E06000047' => 'countyDurham',
        'E08000026' => 'coventry',
        'E09000008' => 'croydon',
        'E10000006' => 'cumbria',
        'E06000005' => 'darlington',
        'W06000004' => 'denbighshire',
        'E06000015' => 'derby',
        'E10000007' => 'derbyshire',
        'N09000005' => 'derryCityAndStrabane',
        'E10000008' => 'devon',
        'E08000017' => 'doncaster',
        'E06000059' => 'dorset',
        'E08000027' => 'dudley',
        'S12000006' => 'dumfriesAndGalloway',
        'S12000042' => 'dundeeCity',
        'E09000009' => 'ealing',
        'S12000008' => 'eastAyrshire',
        'S12000045' => 'eastDunbartonshire',
        'S12000010' => 'eastLothian',
        'S12000011' => 'eastRenfrewshire',
        'E06000011' => 'eastRidingOfYorkshire',
        'E10000011' => 'eastSussex',
        'E09000010' => 'enfield',
        'E10000012' => 'essex',
        'S12000014' => 'falkirk',
        'N09000006' => 'fermanaghAndOmagh',
        'S12000047' => 'fife',
        'W06000005' => 'flintshire',
        'E08000037' => 'gateshead',
        'S12000049' => 'glasgowCity',
        'E10000013' => 'gloucestershire',
        'E09000011' => 'greenwich',
        'W06000002' => 'gwynedd',
        'E09000012' => 'hackneyAndCityOfLondon',
        'E06000006' => 'halton',
        'E09000013' => 'hammersmithAndFulham',
        'E10000014' => 'hampshire',
        'E09000014' => 'haringey',
        'E09000015' => 'harrow',
        'E06000001' => 'hartlepool',
        'E09000016' => 'havering',
        'E06000019' => 'herefordshireCountyOf',
        'E10000015' => 'hertfordshire',
        'S12000017' => 'highland',
        'E09000017' => 'hillingdon',
        'E09000018' => 'hounslow',
        'S12000018' => 'inverclyde',
        'W06000001' => 'isleOfAnglesey',
        'E06000046' => 'isleOfWight',
        'E09000019' => 'islington',
        'E09000020' => 'kensingtonAndChelsea',
        'E10000016' => 'kent',
        'E06000010' => 'kingstonUponHullCityOf',
        'E09000021' => 'kingstonUponThames',
        'E08000034' => 'kirklees',
        'E08000011' => 'knowsley',
        'E09000022' => 'lambeth',
        'E10000017' => 'lancashire',
        'E08000035' => 'leeds',
        'E06000016' => 'leicester',
        'E10000018' => 'leicestershire',
        'E09000023' => 'lewisham',
        'E10000019' => 'lincolnshire',
        'N09000007' => 'lisburnAndCastlereagh',
        'E08000012' => 'liverpool',
        'E06000032' => 'luton',
        'E08000003' => 'manchester',
        'E06000035' => 'medway',
        'W06000024' => 'merthyrTydfil',
        'E09000024' => 'merton',
        'N09000008' => 'midAndEastAntrim',
        'N09000009' => 'midUlster',
        'E06000002' => 'middlesbrough',
        'S12000019' => 'midlothian',
        'E06000042' => 'miltonKeynes',
        'W06000021' => 'monmouthshire',
        'S12000020' => 'moray',
        'S12000013' => 'naHEileananSiar',
        'W06000012' => 'neathPortTalbot',
        'E08000021' => 'newcastleUponTyne',
        'E09000025' => 'newham',
        'W06000022' => 'newport',
        'N09000010' => 'newryMourneAndDown',
        'E10000020' => 'norfolk',
        'S12000021' => 'northAyrshire',
        'E06000012' => 'northEastLincolnshire',
        'S12000050' => 'northLanarkshire',
        'E06000013' => 'northLincolnshire',
        'E06000024' => 'northSomerset',
        'E08000022' => 'northTyneside',
        'E10000023' => 'northYorkshire',
        'E10000021' => 'northamptonshire',
        'E06000057' => 'northumberland',
        'E06000018' => 'nottingham',
        'E10000024' => 'nottinghamshire',
        'E08000004' => 'oldham',
        'S12000023' => 'orkneyIslands',
        'E10000025' => 'oxfordshire',
        'W06000009' => 'pembrokeshire',
        'S12000048' => 'perthAndKinross',
        'E06000031' => 'peterborough',
        'E06000026' => 'plymouth',
        'E06000044' => 'portsmouth',
        'W06000023' => 'powys',
        'E06000038' => 'reading',
        'E09000026' => 'redbridge',
        'E06000003' => 'redcarAndCleveland',
        'S12000038' => 'renfrewshire',
        'W06000016' => 'rhonddaCynonTaf',
        'E09000027' => 'richmondUponThames',
        'E08000005' => 'rochdale',
        'E08000018' => 'rotherham',
        'E06000017' => 'rutland',
        'E08000006' => 'salford',
        'E08000028' => 'sandwell',
        'S12000026' => 'scottishBorders',
        'E08000014' => 'sefton',
        'E08000019' => 'sheffield',
        'S12000027' => 'shetlandIslands',
        'E06000051' => 'shropshire',
        'E06000039' => 'slough',
        'E08000029' => 'solihull',
        'E10000027' => 'somerset',
        'S12000028' => 'southAyrshire',
        'E06000025' => 'southGloucestershire',
        'S12000029' => 'southLanarkshire',
        'E08000023' => 'southTyneside',
        'E06000045' => 'southampton',
        'E06000033' => 'southendOnSea',
        'E09000028' => 'southwark',
        'E08000013' => 'stHelens',
        'E10000028' => 'staffordshire',
        'S12000030' => 'stirling',
        'E08000007' => 'stockport',
        'E06000004' => 'stocktonOnTees',
        'E06000021' => 'stokeOnTrent',
        'E10000029' => 'suffolk',
        'E08000024' => 'sunderland',
        'E10000030' => 'surrey',
        'E09000029' => 'sutton',
        'W06000011' => 'swansea',
        'E06000030' => 'swindon',
        'E08000008' => 'tameside',
        'E06000020' => 'telfordAndWrekin',
        'E06000034' => 'thurrock',
        'E06000027' => 'torbay',
        'W06000020' => 'torfaen',
        'E09000030' => 'towerHamlets',
        'E08000009' => 'trafford',
        'W06000014' => 'valeOfGlamorgan',
        'E08000036' => 'wakefield',
        'E08000030' => 'walsall',
        'E09000031' => 'walthamForest',
        'E09000032' => 'wandsworth',
        'E06000007' => 'warrington',
        'E10000031' => 'warwickshire',
        'E06000037' => 'westBerkshire',
        'S12000039' => 'westDunbartonshire',
        'S12000040' => 'westLothian',
        'E10000032' => 'westSussex',
        'E09000033' => 'westminster',
        'E08000010' => 'wigan',
        'E06000054' => 'wiltshire',
        'E06000040' => 'windsorAndMaidenhead',
        'E08000015' => 'wirral',
        'E06000041' => 'wokingham',
        'E08000031' => 'wolverhampton',
        'E10000034' => 'worcestershire',
        'W06000006' => 'wrexham',
        'E06000014' => 'york',
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @param string      $name
     * @param string|null $code
     *
     * @return void
     */
    private function __construct(string $name, ?string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @param string $code
     *
     * @return \PHECovid\Client\Model\Utla
     */
    public static function fromCode(string $code): self
    {
        $method = self::CODE_TO_METHOD[$code] ?? null;

        if (null === $method) {
            throw new \InvalidArgumentException('Unknown area code.');
        }

        return self::$method();
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function aberdeenCity(): self
    {
        return new self('Aberdeen City', 'S12000033');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function aberdeenshire(): self
    {
        return new self('Aberdeenshire', 'S12000034');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function angus(): self
    {
        return new self('Angus', 'S12000041');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function antrimAndNewtownabbey(): self
    {
        return new self('Antrim and Newtownabbey', 'N09000001');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function ardsAndNorthDown(): self
    {
        return new self('Ards and North Down', 'N09000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function argyllAndBute(): self
    {
        return new self('Argyll and Bute', 'S12000035');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function armaghCityBanbridgeAndCraigavon(): self
    {
        return new self('Armagh City, Banbridge and Craigavon', 'N09000002');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function barkingAndDagenham(): self
    {
        return new self('Barking and Dagenham', 'E09000002');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function barnet(): self
    {
        return new self('Barnet', 'E09000003');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function barnsley(): self
    {
        return new self('Barnsley', 'E08000016');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bathAndNorthEastSomerset(): self
    {
        return new self('Bath and North East Somerset', 'E06000022');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bedford(): self
    {
        return new self('Bedford', 'E06000055');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function belfast(): self
    {
        return new self('Belfast', 'N09000003');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bexley(): self
    {
        return new self('Bexley', 'E09000004');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function birmingham(): self
    {
        return new self('Birmingham', 'E08000025');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function blackburnWithDarwen(): self
    {
        return new self('Blackburn with Darwen', 'E06000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function blackpool(): self
    {
        return new self('Blackpool', 'E06000009');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function blaenauGwent(): self
    {
        return new self('Blaenau Gwent', 'W06000019');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bolton(): self
    {
        return new self('Bolton', 'E08000001');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bournemouthChristchurchAndPoole(): self
    {
        return new self('Bournemouth, Christchurch and Poole', 'E06000058');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bracknellForest(): self
    {
        return new self('Bracknell Forest', 'E06000036');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bradford(): self
    {
        return new self('Bradford', 'E08000032');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function brent(): self
    {
        return new self('Brent', 'E09000005');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bridgend(): self
    {
        return new self('Bridgend', 'W06000013');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function brightonAndHove(): self
    {
        return new self('Brighton and Hove', 'E06000043');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bristolCityOf(): self
    {
        return new self('Bristol, City of', 'E06000023');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bromley(): self
    {
        return new self('Bromley', 'E09000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function buckinghamshire(): self
    {
        return new self('Buckinghamshire', 'E10000002');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function bury(): self
    {
        return new self('Bury', 'E08000002');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function caerphilly(): self
    {
        return new self('Caerphilly', 'W06000018');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function calderdale(): self
    {
        return new self('Calderdale', 'E08000033');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cambridgeshire(): self
    {
        return new self('Cambridgeshire', 'E10000003');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function camden(): self
    {
        return new self('Camden', 'E09000007');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cardiff(): self
    {
        return new self('Cardiff', 'W06000015');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function carmarthenshire(): self
    {
        return new self('Carmarthenshire', 'W06000010');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function causewayCoastAndGlens(): self
    {
        return new self('Causeway Coast and Glens', 'N09000004');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function centralBedfordshire(): self
    {
        return new self('Central Bedfordshire', 'E06000056');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function ceredigion(): self
    {
        return new self('Ceredigion', 'W06000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cheshireEast(): self
    {
        return new self('Cheshire East', 'E06000049');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cheshireWestAndChester(): self
    {
        return new self('Cheshire West and Chester', 'E06000050');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cityOfEdinburgh(): self
    {
        return new self('City of Edinburgh', 'S12000036');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function clackmannanshire(): self
    {
        return new self('Clackmannanshire', 'S12000005');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function conwy(): self
    {
        return new self('Conwy', 'W06000003');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cornwallAndIslesOfScilly(): self
    {
        return new self('Cornwall and Isles of Scilly', 'E06000052');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function countyDurham(): self
    {
        return new self('County Durham', 'E06000047');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function coventry(): self
    {
        return new self('Coventry', 'E08000026');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function croydon(): self
    {
        return new self('Croydon', 'E09000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function cumbria(): self
    {
        return new self('Cumbria', 'E10000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function darlington(): self
    {
        return new self('Darlington', 'E06000005');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function denbighshire(): self
    {
        return new self('Denbighshire', 'W06000004');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function derby(): self
    {
        return new self('Derby', 'E06000015');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function derbyshire(): self
    {
        return new self('Derbyshire', 'E10000007');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function derryCityAndStrabane(): self
    {
        return new self('Derry City and Strabane', 'N09000005');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function devon(): self
    {
        return new self('Devon', 'E10000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function doncaster(): self
    {
        return new self('Doncaster', 'E08000017');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function dorset(): self
    {
        return new self('Dorset', 'E06000059');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function dudley(): self
    {
        return new self('Dudley', 'E08000027');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function dumfriesAndGalloway(): self
    {
        return new self('Dumfries and Galloway', 'S12000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function dundeeCity(): self
    {
        return new self('Dundee City', 'S12000042');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function ealing(): self
    {
        return new self('Ealing', 'E09000009');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function eastAyrshire(): self
    {
        return new self('East Ayrshire', 'S12000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function eastDunbartonshire(): self
    {
        return new self('East Dunbartonshire', 'S12000045');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function eastLothian(): self
    {
        return new self('East Lothian', 'S12000010');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function eastRenfrewshire(): self
    {
        return new self('East Renfrewshire', 'S12000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function eastRidingOfYorkshire(): self
    {
        return new self('East Riding of Yorkshire', 'E06000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function eastSussex(): self
    {
        return new self('East Sussex', 'E10000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function enfield(): self
    {
        return new self('Enfield', 'E09000010');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function essex(): self
    {
        return new self('Essex', 'E10000012');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function falkirk(): self
    {
        return new self('Falkirk', 'S12000014');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function fermanaghAndOmagh(): self
    {
        return new self('Fermanagh and Omagh', 'N09000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function fife(): self
    {
        return new self('Fife', 'S12000047');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function flintshire(): self
    {
        return new self('Flintshire', 'W06000005');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function gateshead(): self
    {
        return new self('Gateshead', 'E08000037');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function glasgowCity(): self
    {
        return new self('Glasgow City', 'S12000049');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function gloucestershire(): self
    {
        return new self('Gloucestershire', 'E10000013');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function greenwich(): self
    {
        return new self('Greenwich', 'E09000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function gwynedd(): self
    {
        return new self('Gwynedd', 'W06000002');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hackneyAndCityOfLondon(): self
    {
        return new self('Hackney and City of London', 'E09000012');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function halton(): self
    {
        return new self('Halton', 'E06000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hammersmithAndFulham(): self
    {
        return new self('Hammersmith and Fulham', 'E09000013');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hampshire(): self
    {
        return new self('Hampshire', 'E10000014');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function haringey(): self
    {
        return new self('Haringey', 'E09000014');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function harrow(): self
    {
        return new self('Harrow', 'E09000015');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hartlepool(): self
    {
        return new self('Hartlepool', 'E06000001');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function havering(): self
    {
        return new self('Havering', 'E09000016');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function herefordshireCountyOf(): self
    {
        return new self('Herefordshire, County of', 'E06000019');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hertfordshire(): self
    {
        return new self('Hertfordshire', 'E10000015');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function highland(): self
    {
        return new self('Highland', 'S12000017');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hillingdon(): self
    {
        return new self('Hillingdon', 'E09000017');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function hounslow(): self
    {
        return new self('Hounslow', 'E09000018');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function inverclyde(): self
    {
        return new self('Inverclyde', 'S12000018');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function isleOfAnglesey(): self
    {
        return new self('Isle of Anglesey', 'W06000001');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function isleOfWight(): self
    {
        return new self('Isle of Wight', 'E06000046');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function islington(): self
    {
        return new self('Islington', 'E09000019');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function kensingtonAndChelsea(): self
    {
        return new self('Kensington and Chelsea', 'E09000020');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function kent(): self
    {
        return new self('Kent', 'E10000016');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function kingstonUponHullCityOf(): self
    {
        return new self('Kingston upon Hull, City of', 'E06000010');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function kingstonUponThames(): self
    {
        return new self('Kingston upon Thames', 'E09000021');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function kirklees(): self
    {
        return new self('Kirklees', 'E08000034');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function knowsley(): self
    {
        return new self('Knowsley', 'E08000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function lambeth(): self
    {
        return new self('Lambeth', 'E09000022');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function lancashire(): self
    {
        return new self('Lancashire', 'E10000017');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function leeds(): self
    {
        return new self('Leeds', 'E08000035');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function leicester(): self
    {
        return new self('Leicester', 'E06000016');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function leicestershire(): self
    {
        return new self('Leicestershire', 'E10000018');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function lewisham(): self
    {
        return new self('Lewisham', 'E09000023');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function lincolnshire(): self
    {
        return new self('Lincolnshire', 'E10000019');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function lisburnAndCastlereagh(): self
    {
        return new self('Lisburn and Castlereagh', 'N09000007');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function liverpool(): self
    {
        return new self('Liverpool', 'E08000012');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function luton(): self
    {
        return new self('Luton', 'E06000032');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function manchester(): self
    {
        return new self('Manchester', 'E08000003');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function medway(): self
    {
        return new self('Medway', 'E06000035');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function merthyrTydfil(): self
    {
        return new self('Merthyr Tydfil', 'W06000024');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function merton(): self
    {
        return new self('Merton', 'E09000024');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function midAndEastAntrim(): self
    {
        return new self('Mid and East Antrim', 'N09000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function midUlster(): self
    {
        return new self('Mid Ulster', 'N09000009');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function middlesbrough(): self
    {
        return new self('Middlesbrough', 'E06000002');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function midlothian(): self
    {
        return new self('Midlothian', 'S12000019');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function miltonKeynes(): self
    {
        return new self('Milton Keynes', 'E06000042');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function monmouthshire(): self
    {
        return new self('Monmouthshire', 'W06000021');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function moray(): self
    {
        return new self('Moray', 'S12000020');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function naHEileananSiar(): self
    {
        return new self('Na h-Eileanan Siar', 'S12000013');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function neathPortTalbot(): self
    {
        return new self('Neath Port Talbot', 'W06000012');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function newcastleUponTyne(): self
    {
        return new self('Newcastle upon Tyne', 'E08000021');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function newham(): self
    {
        return new self('Newham', 'E09000025');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function newport(): self
    {
        return new self('Newport', 'W06000022');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function newryMourneAndDown(): self
    {
        return new self('Newry, Mourne and Down', 'N09000010');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function norfolk(): self
    {
        return new self('Norfolk', 'E10000020');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northAyrshire(): self
    {
        return new self('North Ayrshire', 'S12000021');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northEastLincolnshire(): self
    {
        return new self('North East Lincolnshire', 'E06000012');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northLanarkshire(): self
    {
        return new self('North Lanarkshire', 'S12000050');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northLincolnshire(): self
    {
        return new self('North Lincolnshire', 'E06000013');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northSomerset(): self
    {
        return new self('North Somerset', 'E06000024');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northTyneside(): self
    {
        return new self('North Tyneside', 'E08000022');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northYorkshire(): self
    {
        return new self('North Yorkshire', 'E10000023');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northamptonshire(): self
    {
        return new self('Northamptonshire', 'E10000021');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function northumberland(): self
    {
        return new self('Northumberland', 'E06000057');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function nottingham(): self
    {
        return new self('Nottingham', 'E06000018');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function nottinghamshire(): self
    {
        return new self('Nottinghamshire', 'E10000024');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function oldham(): self
    {
        return new self('Oldham', 'E08000004');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function orkneyIslands(): self
    {
        return new self('Orkney Islands', 'S12000023');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function oxfordshire(): self
    {
        return new self('Oxfordshire', 'E10000025');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function pembrokeshire(): self
    {
        return new self('Pembrokeshire', 'W06000009');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function perthAndKinross(): self
    {
        return new self('Perth and Kinross', 'S12000048');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function peterborough(): self
    {
        return new self('Peterborough', 'E06000031');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function plymouth(): self
    {
        return new self('Plymouth', 'E06000026');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function portsmouth(): self
    {
        return new self('Portsmouth', 'E06000044');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function powys(): self
    {
        return new self('Powys', 'W06000023');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function reading(): self
    {
        return new self('Reading', 'E06000038');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function redbridge(): self
    {
        return new self('Redbridge', 'E09000026');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function redcarAndCleveland(): self
    {
        return new self('Redcar and Cleveland', 'E06000003');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function renfrewshire(): self
    {
        return new self('Renfrewshire', 'S12000038');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function residentOutsideWales(): self
    {
        return new self('Resident outside Wales', null);
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function rhonddaCynonTaf(): self
    {
        return new self('Rhondda Cynon Taf', 'W06000016');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function richmondUponThames(): self
    {
        return new self('Richmond upon Thames', 'E09000027');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function rochdale(): self
    {
        return new self('Rochdale', 'E08000005');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function rotherham(): self
    {
        return new self('Rotherham', 'E08000018');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function rutland(): self
    {
        return new self('Rutland', 'E06000017');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function salford(): self
    {
        return new self('Salford', 'E08000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function sandwell(): self
    {
        return new self('Sandwell', 'E08000028');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function scottishBorders(): self
    {
        return new self('Scottish Borders', 'S12000026');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function sefton(): self
    {
        return new self('Sefton', 'E08000014');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function sheffield(): self
    {
        return new self('Sheffield', 'E08000019');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function shetlandIslands(): self
    {
        return new self('Shetland Islands', 'S12000027');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function shropshire(): self
    {
        return new self('Shropshire', 'E06000051');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function slough(): self
    {
        return new self('Slough', 'E06000039');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function solihull(): self
    {
        return new self('Solihull', 'E08000029');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function somerset(): self
    {
        return new self('Somerset', 'E10000027');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southAyrshire(): self
    {
        return new self('South Ayrshire', 'S12000028');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southGloucestershire(): self
    {
        return new self('South Gloucestershire', 'E06000025');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southLanarkshire(): self
    {
        return new self('South Lanarkshire', 'S12000029');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southTyneside(): self
    {
        return new self('South Tyneside', 'E08000023');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southampton(): self
    {
        return new self('Southampton', 'E06000045');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southendOnSea(): self
    {
        return new self('Southend-on-Sea', 'E06000033');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function southwark(): self
    {
        return new self('Southwark', 'E09000028');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function stHelens(): self
    {
        return new self('St. Helens', 'E08000013');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function staffordshire(): self
    {
        return new self('Staffordshire', 'E10000028');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function stirling(): self
    {
        return new self('Stirling', 'S12000030');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function stockport(): self
    {
        return new self('Stockport', 'E08000007');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function stocktonOnTees(): self
    {
        return new self('Stockton-on-Tees', 'E06000004');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function stokeOnTrent(): self
    {
        return new self('Stoke-on-Trent', 'E06000021');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function suffolk(): self
    {
        return new self('Suffolk', 'E10000029');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function sunderland(): self
    {
        return new self('Sunderland', 'E08000024');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function surrey(): self
    {
        return new self('Surrey', 'E10000030');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function sutton(): self
    {
        return new self('Sutton', 'E09000029');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function swansea(): self
    {
        return new self('Swansea', 'W06000011');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function swindon(): self
    {
        return new self('Swindon', 'E06000030');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function tameside(): self
    {
        return new self('Tameside', 'E08000008');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function telfordAndWrekin(): self
    {
        return new self('Telford and Wrekin', 'E06000020');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function thurrock(): self
    {
        return new self('Thurrock', 'E06000034');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function torbay(): self
    {
        return new self('Torbay', 'E06000027');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function torfaen(): self
    {
        return new self('Torfaen', 'W06000020');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function towerHamlets(): self
    {
        return new self('Tower Hamlets', 'E09000030');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function trafford(): self
    {
        return new self('Trafford', 'E08000009');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function valeOfGlamorgan(): self
    {
        return new self('Vale of Glamorgan', 'W06000014');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wakefield(): self
    {
        return new self('Wakefield', 'E08000036');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function walsall(): self
    {
        return new self('Walsall', 'E08000030');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function walthamForest(): self
    {
        return new self('Waltham Forest', 'E09000031');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wandsworth(): self
    {
        return new self('Wandsworth', 'E09000032');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function warrington(): self
    {
        return new self('Warrington', 'E06000007');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function warwickshire(): self
    {
        return new self('Warwickshire', 'E10000031');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function westBerkshire(): self
    {
        return new self('West Berkshire', 'E06000037');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function westDunbartonshire(): self
    {
        return new self('West Dunbartonshire', 'S12000039');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function westLothian(): self
    {
        return new self('West Lothian', 'S12000040');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function westSussex(): self
    {
        return new self('West Sussex', 'E10000032');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function westminster(): self
    {
        return new self('Westminster', 'E09000033');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wigan(): self
    {
        return new self('Wigan', 'E08000010');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wiltshire(): self
    {
        return new self('Wiltshire', 'E06000054');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function windsorAndMaidenhead(): self
    {
        return new self('Windsor and Maidenhead', 'E06000040');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wirral(): self
    {
        return new self('Wirral', 'E08000015');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wokingham(): self
    {
        return new self('Wokingham', 'E06000041');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wolverhampton(): self
    {
        return new self('Wolverhampton', 'E08000031');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function worcestershire(): self
    {
        return new self('Worcestershire', 'E10000034');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function wrexham(): self
    {
        return new self('Wrexham', 'W06000006');
    }

    /**
     * @return \PHECovid\Client\Model\Utla
     */
    public static function york(): self
    {
        return new self('York', 'E06000014');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        if (null === $this->code) {
            throw new \BadMethodCallException('Area code not available.');
        }

        return $this->code;
    }
}
