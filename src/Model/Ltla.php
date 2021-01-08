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
final class Ltla
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
        'S12000033' => 'aberdeenCity',
        'S12000034' => 'aberdeenshire',
        'E07000223' => 'adur',
        'E07000026' => 'allerdale',
        'E07000032' => 'amberValley',
        'S12000041' => 'angus',
        'N09000001' => 'antrimAndNewtownabbey',
        'N09000011' => 'ardsAndNorthDown',
        'S12000035' => 'argyllAndBute',
        'N09000002' => 'armaghCityBanbridgeAndCraigavon',
        'E07000224' => 'arun',
        'E07000170' => 'ashfield',
        'E07000105' => 'ashford',
        'E07000004' => 'aylesburyVale',
        'E07000200' => 'babergh',
        'E09000002' => 'barkingAndDagenham',
        'E09000003' => 'barnet',
        'E08000016' => 'barnsley',
        'E07000027' => 'barrowInFurness',
        'E07000066' => 'basildon',
        'E07000084' => 'basingstokeAndDeane',
        'E07000171' => 'bassetlaw',
        'E06000022' => 'bathAndNorthEastSomerset',
        'E06000055' => 'bedford',
        'N09000003' => 'belfast',
        'E09000004' => 'bexley',
        'E08000025' => 'birmingham',
        'E07000129' => 'blaby',
        'E06000008' => 'blackburnWithDarwen',
        'E06000009' => 'blackpool',
        'W06000019' => 'blaenauGwent',
        'E07000033' => 'bolsover',
        'E08000001' => 'bolton',
        'E07000136' => 'boston',
        'E06000058' => 'bournemouthChristchurchAndPoole',
        'E06000036' => 'bracknellForest',
        'E08000032' => 'bradford',
        'E07000067' => 'braintree',
        'E07000143' => 'breckland',
        'E09000005' => 'brent',
        'E07000068' => 'brentwood',
        'W06000013' => 'bridgend',
        'E06000043' => 'brightonAndHove',
        'E06000023' => 'bristolCityOf',
        'E07000144' => 'broadland',
        'E09000006' => 'bromley',
        'E07000234' => 'bromsgrove',
        'E07000095' => 'broxbourne',
        'E07000172' => 'broxtowe',
        'E07000117' => 'burnley',
        'E08000002' => 'bury',
        'W06000018' => 'caerphilly',
        'E08000033' => 'calderdale',
        'E07000008' => 'cambridge',
        'E09000007' => 'camden',
        'E07000192' => 'cannockChase',
        'E07000106' => 'canterbury',
        'W06000015' => 'cardiff',
        'E07000028' => 'carlisle',
        'W06000010' => 'carmarthenshire',
        'E07000069' => 'castlePoint',
        'N09000004' => 'causewayCoastAndGlens',
        'E06000056' => 'centralBedfordshire',
        'W06000008' => 'ceredigion',
        'E07000130' => 'charnwood',
        'E07000070' => 'chelmsford',
        'E07000078' => 'cheltenham',
        'E07000177' => 'cherwell',
        'E06000049' => 'cheshireEast',
        'E06000050' => 'cheshireWestAndChester',
        'E07000034' => 'chesterfield',
        'E07000225' => 'chichester',
        'E07000005' => 'chiltern',
        'E07000118' => 'chorley',
        'S12000036' => 'cityOfEdinburgh',
        'S12000005' => 'clackmannanshire',
        'E07000071' => 'colchester',
        'S12000013' => 'comhairleNanEileanSiar',
        'W06000003' => 'conwy',
        'E07000029' => 'copeland',
        'E07000150' => 'corby',
        'E06000052' => 'cornwallAndIslesOfScilly',
        'E07000079' => 'cotswold',
        'E06000047' => 'countyDurham',
        'E08000026' => 'coventry',
        'E07000163' => 'craven',
        'E07000226' => 'crawley',
        'E09000008' => 'croydon',
        'E07000096' => 'dacorum',
        'E06000005' => 'darlington',
        'E07000107' => 'dartford',
        'E07000151' => 'daventry',
        'W06000004' => 'denbighshire',
        'E06000015' => 'derby',
        'E07000035' => 'derbyshireDales',
        'N09000005' => 'derryCityAndStrabane',
        'E08000017' => 'doncaster',
        'E06000059' => 'dorset',
        'E07000108' => 'dover',
        'E08000027' => 'dudley',
        'S12000006' => 'dumfriesAndGalloway',
        'S12000042' => 'dundeeCity',
        'E09000009' => 'ealing',
        'S12000008' => 'eastAyrshire',
        'E07000009' => 'eastCambridgeshire',
        'E07000040' => 'eastDevon',
        'S12000045' => 'eastDunbartonshire',
        'E07000085' => 'eastHampshire',
        'E07000242' => 'eastHertfordshire',
        'E07000137' => 'eastLindsey',
        'S12000010' => 'eastLothian',
        'E07000152' => 'eastNorthamptonshire',
        'S12000011' => 'eastRenfrewshire',
        'E06000011' => 'eastRidingOfYorkshire',
        'E07000193' => 'eastStaffordshire',
        'E07000244' => 'eastSuffolk',
        'E07000061' => 'eastbourne',
        'E07000086' => 'eastleigh',
        'E07000030' => 'eden',
        'E07000207' => 'elmbridge',
        'E09000010' => 'enfield',
        'E07000072' => 'eppingForest',
        'E07000208' => 'epsomAndEwell',
        'E07000036' => 'erewash',
        'E07000041' => 'exeter',
        'S12000014' => 'falkirk',
        'E07000087' => 'fareham',
        'E07000010' => 'fenland',
        'N09000006' => 'fermanaghAndOmagh',
        'S12000047' => 'fife',
        'W06000005' => 'flintshire',
        'E07000112' => 'folkestoneAndHythe',
        'E07000080' => 'forestOfDean',
        'E07000119' => 'fylde',
        'E08000037' => 'gateshead',
        'E07000173' => 'gedling',
        'S12000049' => 'glasgowCity',
        'E07000081' => 'gloucester',
        'E07000088' => 'gosport',
        'E07000109' => 'gravesham',
        'E07000145' => 'greatYarmouth',
        'E09000011' => 'greenwich',
        'E07000209' => 'guildford',
        'W06000002' => 'gwynedd',
        'E09000012' => 'hackneyAndCityOfLondon',
        'E06000006' => 'halton',
        'E07000164' => 'hambleton',
        'E09000013' => 'hammersmithAndFulham',
        'E07000131' => 'harborough',
        'E09000014' => 'haringey',
        'E07000073' => 'harlow',
        'E07000165' => 'harrogate',
        'E09000015' => 'harrow',
        'E07000089' => 'hart',
        'E06000001' => 'hartlepool',
        'E07000062' => 'hastings',
        'E07000090' => 'havant',
        'E09000016' => 'havering',
        'E06000019' => 'herefordshireCountyOf',
        'E07000098' => 'hertsmere',
        'E07000037' => 'highPeak',
        'S12000017' => 'highland',
        'E09000017' => 'hillingdon',
        'E07000132' => 'hinckleyAndBosworth',
        'E07000227' => 'horsham',
        'E09000018' => 'hounslow',
        'E07000011' => 'huntingdonshire',
        'E07000120' => 'hyndburn',
        'S12000018' => 'inverclyde',
        'E07000202' => 'ipswich',
        'W06000001' => 'isleOfAnglesey',
        'E06000046' => 'isleOfWight',
        'E09000019' => 'islington',
        'E09000020' => 'kensingtonAndChelsea',
        'E07000153' => 'kettering',
        'E07000146' => 'kingsLynnAndWestNorfolk',
        'E06000010' => 'kingstonUponHullCityOf',
        'E09000021' => 'kingstonUponThames',
        'E08000034' => 'kirklees',
        'E08000011' => 'knowsley',
        'E09000022' => 'lambeth',
        'E07000121' => 'lancaster',
        'E08000035' => 'leeds',
        'E06000016' => 'leicester',
        'E07000063' => 'lewes',
        'E09000023' => 'lewisham',
        'E07000194' => 'lichfield',
        'E07000138' => 'lincoln',
        'N09000007' => 'lisburnAndCastlereagh',
        'E08000012' => 'liverpool',
        'E06000032' => 'luton',
        'E07000110' => 'maidstone',
        'E07000074' => 'maldon',
        'E07000235' => 'malvernHills',
        'E08000003' => 'manchester',
        'E07000174' => 'mansfield',
        'E06000035' => 'medway',
        'E07000133' => 'melton',
        'E07000187' => 'mendip',
        'W06000024' => 'merthyrTydfil',
        'E09000024' => 'merton',
        'N09000008' => 'midAndEastAntrim',
        'E07000042' => 'midDevon',
        'E07000203' => 'midSuffolk',
        'E07000228' => 'midSussex',
        'N09000009' => 'midUlster',
        'E06000002' => 'middlesbrough',
        'S12000019' => 'midlothian',
        'E06000042' => 'miltonKeynes',
        'E07000210' => 'moleValley',
        'W06000021' => 'monmouthshire',
        'S12000020' => 'moray',
        'W06000012' => 'neathPortTalbot',
        'E07000091' => 'newForest',
        'E07000175' => 'newarkAndSherwood',
        'E08000021' => 'newcastleUponTyne',
        'E07000195' => 'newcastleUnderLyme',
        'E09000025' => 'newham',
        'W06000022' => 'newport',
        'N09000010' => 'newryMourneAndDown',
        'S12000021' => 'northAyrshire',
        'E07000043' => 'northDevon',
        'E07000038' => 'northEastDerbyshire',
        'E06000012' => 'northEastLincolnshire',
        'E07000099' => 'northHertfordshire',
        'E07000139' => 'northKesteven',
        'S12000050' => 'northLanarkshire',
        'E06000013' => 'northLincolnshire',
        'E07000147' => 'northNorfolk',
        'E06000024' => 'northSomerset',
        'E08000022' => 'northTyneside',
        'E07000218' => 'northWarwickshire',
        'E07000134' => 'northWestLeicestershire',
        'E07000154' => 'northampton',
        'E06000057' => 'northumberland',
        'E07000148' => 'norwich',
        'E06000018' => 'nottingham',
        'E07000219' => 'nuneatonAndBedworth',
        'E07000135' => 'oadbyAndWigston',
        'E08000004' => 'oldham',
        'S12000023' => 'orkneyIslands',
        'E07000178' => 'oxford',
        'W06000009' => 'pembrokeshire',
        'E07000122' => 'pendle',
        'S12000048' => 'perthAndKinross',
        'E06000031' => 'peterborough',
        'E06000026' => 'plymouth',
        'E06000044' => 'portsmouth',
        'W06000023' => 'powys',
        'E07000123' => 'preston',
        'E06000038' => 'reading',
        'E09000026' => 'redbridge',
        'E06000003' => 'redcarAndCleveland',
        'E07000236' => 'redditch',
        'E07000211' => 'reigateAndBanstead',
        'S12000038' => 'renfrewshire',
        'W06000016' => 'rhonddaCynonTaf',
        'E07000124' => 'ribbleValley',
        'E09000027' => 'richmondUponThames',
        'E07000166' => 'richmondshire',
        'E08000005' => 'rochdale',
        'E07000075' => 'rochford',
        'E07000125' => 'rossendale',
        'E07000064' => 'rother',
        'E08000018' => 'rotherham',
        'E07000220' => 'rugby',
        'E07000212' => 'runnymede',
        'E07000176' => 'rushcliffe',
        'E07000092' => 'rushmoor',
        'E06000017' => 'rutland',
        'E07000167' => 'ryedale',
        'E08000006' => 'salford',
        'E08000028' => 'sandwell',
        'E07000168' => 'scarborough',
        'S12000026' => 'scottishBorders',
        'E07000188' => 'sedgemoor',
        'E08000014' => 'sefton',
        'E07000169' => 'selby',
        'E07000111' => 'sevenoaks',
        'E08000019' => 'sheffield',
        'S12000027' => 'shetlandIslands',
        'E06000051' => 'shropshire',
        'E06000039' => 'slough',
        'E08000029' => 'solihull',
        'E07000246' => 'somersetWestAndTaunton',
        'S12000028' => 'southAyrshire',
        'E07000006' => 'southBucks',
        'E07000012' => 'southCambridgeshire',
        'E07000039' => 'southDerbyshire',
        'E06000025' => 'southGloucestershire',
        'E07000044' => 'southHams',
        'E07000140' => 'southHolland',
        'E07000141' => 'southKesteven',
        'E07000031' => 'southLakeland',
        'S12000029' => 'southLanarkshire',
        'E07000149' => 'southNorfolk',
        'E07000155' => 'southNorthamptonshire',
        'E07000179' => 'southOxfordshire',
        'E07000126' => 'southRibble',
        'E07000189' => 'southSomerset',
        'E07000196' => 'southStaffordshire',
        'E08000023' => 'southTyneside',
        'E06000045' => 'southampton',
        'E06000033' => 'southendOnSea',
        'E09000028' => 'southwark',
        'E07000213' => 'spelthorne',
        'E07000240' => 'stAlbans',
        'E08000013' => 'stHelens',
        'E07000197' => 'stafford',
        'E07000198' => 'staffordshireMoorlands',
        'E07000243' => 'stevenage',
        'S12000030' => 'stirling',
        'E08000007' => 'stockport',
        'E06000004' => 'stocktonOnTees',
        'E06000021' => 'stokeOnTrent',
        'E07000221' => 'stratfordOnAvon',
        'E07000082' => 'stroud',
        'E08000024' => 'sunderland',
        'E07000214' => 'surreyHeath',
        'E09000029' => 'sutton',
        'E07000113' => 'swale',
        'W06000011' => 'swansea',
        'E06000030' => 'swindon',
        'E08000008' => 'tameside',
        'E07000199' => 'tamworth',
        'E07000215' => 'tandridge',
        'E07000045' => 'teignbridge',
        'E06000020' => 'telfordAndWrekin',
        'E07000076' => 'tendring',
        'E07000093' => 'testValley',
        'E07000083' => 'tewkesbury',
        'E07000114' => 'thanet',
        'E07000102' => 'threeRivers',
        'E06000034' => 'thurrock',
        'E07000115' => 'tonbridgeAndMalling',
        'E06000027' => 'torbay',
        'W06000020' => 'torfaen',
        'E07000046' => 'torridge',
        'E09000030' => 'towerHamlets',
        'E08000009' => 'trafford',
        'E07000116' => 'tunbridgeWells',
        'E07000077' => 'uttlesford',
        'W06000014' => 'valeOfGlamorgan',
        'E07000180' => 'valeOfWhiteHorse',
        'E08000036' => 'wakefield',
        'E08000030' => 'walsall',
        'E09000031' => 'walthamForest',
        'E09000032' => 'wandsworth',
        'E06000007' => 'warrington',
        'E07000222' => 'warwick',
        'E07000103' => 'watford',
        'E07000216' => 'waverley',
        'E07000065' => 'wealden',
        'E07000156' => 'wellingborough',
        'E07000241' => 'welwynHatfield',
        'E06000037' => 'westBerkshire',
        'E07000047' => 'westDevon',
        'S12000039' => 'westDunbartonshire',
        'E07000127' => 'westLancashire',
        'E07000142' => 'westLindsey',
        'S12000040' => 'westLothian',
        'E07000181' => 'westOxfordshire',
        'E07000245' => 'westSuffolk',
        'E09000033' => 'westminster',
        'E08000010' => 'wigan',
        'E06000054' => 'wiltshire',
        'E07000094' => 'winchester',
        'E06000040' => 'windsorAndMaidenhead',
        'E08000015' => 'wirral',
        'E07000217' => 'woking',
        'E06000041' => 'wokingham',
        'E08000031' => 'wolverhampton',
        'E07000237' => 'worcester',
        'E07000229' => 'worthing',
        'W06000006' => 'wrexham',
        'E07000238' => 'wychavon',
        'E07000007' => 'wycombe',
        'E07000128' => 'wyre',
        'E07000239' => 'wyreForest',
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
     * @return \PHECovid\Client\Model\Ltla
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
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function aberdeenCity(): self
    {
        return new self('Aberdeen City', 'S12000033');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function aberdeenshire(): self
    {
        return new self('Aberdeenshire', 'S12000034');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function adur(): self
    {
        return new self('Adur', 'E07000223');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function allerdale(): self
    {
        return new self('Allerdale', 'E07000026');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function amberValley(): self
    {
        return new self('Amber Valley', 'E07000032');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function angus(): self
    {
        return new self('Angus', 'S12000041');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function antrimAndNewtownabbey(): self
    {
        return new self('Antrim and Newtownabbey', 'N09000001');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ardsAndNorthDown(): self
    {
        return new self('Ards and North Down', 'N09000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function argyllAndBute(): self
    {
        return new self('Argyll and Bute', 'S12000035');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function armaghCityBanbridgeAndCraigavon(): self
    {
        return new self('Armagh City, Banbridge and Craigavon', 'N09000002');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function arun(): self
    {
        return new self('Arun', 'E07000224');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ashfield(): self
    {
        return new self('Ashfield', 'E07000170');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ashford(): self
    {
        return new self('Ashford', 'E07000105');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function aylesburyVale(): self
    {
        return new self('Aylesbury Vale', 'E07000004');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function babergh(): self
    {
        return new self('Babergh', 'E07000200');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function barkingAndDagenham(): self
    {
        return new self('Barking and Dagenham', 'E09000002');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function barnet(): self
    {
        return new self('Barnet', 'E09000003');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function barnsley(): self
    {
        return new self('Barnsley', 'E08000016');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function barrowInFurness(): self
    {
        return new self('Barrow-in-Furness', 'E07000027');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function basildon(): self
    {
        return new self('Basildon', 'E07000066');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function basingstokeAndDeane(): self
    {
        return new self('Basingstoke and Deane', 'E07000084');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bassetlaw(): self
    {
        return new self('Bassetlaw', 'E07000171');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bathAndNorthEastSomerset(): self
    {
        return new self('Bath and North East Somerset', 'E06000022');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bedford(): self
    {
        return new self('Bedford', 'E06000055');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function belfast(): self
    {
        return new self('Belfast', 'N09000003');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bexley(): self
    {
        return new self('Bexley', 'E09000004');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function birmingham(): self
    {
        return new self('Birmingham', 'E08000025');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function blaby(): self
    {
        return new self('Blaby', 'E07000129');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function blackburnWithDarwen(): self
    {
        return new self('Blackburn with Darwen', 'E06000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function blackpool(): self
    {
        return new self('Blackpool', 'E06000009');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function blaenauGwent(): self
    {
        return new self('Blaenau Gwent', 'W06000019');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bolsover(): self
    {
        return new self('Bolsover', 'E07000033');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bolton(): self
    {
        return new self('Bolton', 'E08000001');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function boston(): self
    {
        return new self('Boston', 'E07000136');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bournemouthChristchurchAndPoole(): self
    {
        return new self('Bournemouth, Christchurch and Poole', 'E06000058');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bracknellForest(): self
    {
        return new self('Bracknell Forest', 'E06000036');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bradford(): self
    {
        return new self('Bradford', 'E08000032');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function braintree(): self
    {
        return new self('Braintree', 'E07000067');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function breckland(): self
    {
        return new self('Breckland', 'E07000143');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function brent(): self
    {
        return new self('Brent', 'E09000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function brentwood(): self
    {
        return new self('Brentwood', 'E07000068');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bridgend(): self
    {
        return new self('Bridgend', 'W06000013');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function brightonAndHove(): self
    {
        return new self('Brighton and Hove', 'E06000043');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bristolCityOf(): self
    {
        return new self('Bristol, City of', 'E06000023');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function broadland(): self
    {
        return new self('Broadland', 'E07000144');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bromley(): self
    {
        return new self('Bromley', 'E09000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bromsgrove(): self
    {
        return new self('Bromsgrove', 'E07000234');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function broxbourne(): self
    {
        return new self('Broxbourne', 'E07000095');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function broxtowe(): self
    {
        return new self('Broxtowe', 'E07000172');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function burnley(): self
    {
        return new self('Burnley', 'E07000117');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function bury(): self
    {
        return new self('Bury', 'E08000002');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function caerphilly(): self
    {
        return new self('Caerphilly', 'W06000018');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function calderdale(): self
    {
        return new self('Calderdale', 'E08000033');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cambridge(): self
    {
        return new self('Cambridge', 'E07000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function camden(): self
    {
        return new self('Camden', 'E09000007');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cannockChase(): self
    {
        return new self('Cannock Chase', 'E07000192');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function canterbury(): self
    {
        return new self('Canterbury', 'E07000106');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cardiff(): self
    {
        return new self('Cardiff', 'W06000015');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function carlisle(): self
    {
        return new self('Carlisle', 'E07000028');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function carmarthenshire(): self
    {
        return new self('Carmarthenshire', 'W06000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function castlePoint(): self
    {
        return new self('Castle Point', 'E07000069');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function causewayCoastAndGlens(): self
    {
        return new self('Causeway Coast and Glens', 'N09000004');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function centralBedfordshire(): self
    {
        return new self('Central Bedfordshire', 'E06000056');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ceredigion(): self
    {
        return new self('Ceredigion', 'W06000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function charnwood(): self
    {
        return new self('Charnwood', 'E07000130');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function chelmsford(): self
    {
        return new self('Chelmsford', 'E07000070');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cheltenham(): self
    {
        return new self('Cheltenham', 'E07000078');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cherwell(): self
    {
        return new self('Cherwell', 'E07000177');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cheshireEast(): self
    {
        return new self('Cheshire East', 'E06000049');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cheshireWestAndChester(): self
    {
        return new self('Cheshire West and Chester', 'E06000050');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function chesterfield(): self
    {
        return new self('Chesterfield', 'E07000034');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function chichester(): self
    {
        return new self('Chichester', 'E07000225');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function chiltern(): self
    {
        return new self('Chiltern', 'E07000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function chorley(): self
    {
        return new self('Chorley', 'E07000118');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cityOfEdinburgh(): self
    {
        return new self('City of Edinburgh', 'S12000036');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function clackmannanshire(): self
    {
        return new self('Clackmannanshire', 'S12000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function colchester(): self
    {
        return new self('Colchester', 'E07000071');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function comhairleNanEileanSiar(): self
    {
        return new self('Comhairle nan Eilean Siar', 'S12000013');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function conwy(): self
    {
        return new self('Conwy', 'W06000003');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function copeland(): self
    {
        return new self('Copeland', 'E07000029');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function corby(): self
    {
        return new self('Corby', 'E07000150');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cornwallAndIslesOfScilly(): self
    {
        return new self('Cornwall and Isles of Scilly', 'E06000052');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function cotswold(): self
    {
        return new self('Cotswold', 'E07000079');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function countyDurham(): self
    {
        return new self('County Durham', 'E06000047');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function coventry(): self
    {
        return new self('Coventry', 'E08000026');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function craven(): self
    {
        return new self('Craven', 'E07000163');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function crawley(): self
    {
        return new self('Crawley', 'E07000226');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function croydon(): self
    {
        return new self('Croydon', 'E09000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dacorum(): self
    {
        return new self('Dacorum', 'E07000096');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function darlington(): self
    {
        return new self('Darlington', 'E06000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dartford(): self
    {
        return new self('Dartford', 'E07000107');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function daventry(): self
    {
        return new self('Daventry', 'E07000151');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function denbighshire(): self
    {
        return new self('Denbighshire', 'W06000004');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function derby(): self
    {
        return new self('Derby', 'E06000015');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function derbyshireDales(): self
    {
        return new self('Derbyshire Dales', 'E07000035');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function derryCityAndStrabane(): self
    {
        return new self('Derry City and Strabane', 'N09000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function doncaster(): self
    {
        return new self('Doncaster', 'E08000017');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dorset(): self
    {
        return new self('Dorset', 'E06000059');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dover(): self
    {
        return new self('Dover', 'E07000108');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dudley(): self
    {
        return new self('Dudley', 'E08000027');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dumfriesAndGalloway(): self
    {
        return new self('Dumfries and Galloway', 'S12000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function dundeeCity(): self
    {
        return new self('Dundee City', 'S12000042');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ealing(): self
    {
        return new self('Ealing', 'E09000009');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastAyrshire(): self
    {
        return new self('East Ayrshire', 'S12000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastCambridgeshire(): self
    {
        return new self('East Cambridgeshire', 'E07000009');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastDevon(): self
    {
        return new self('East Devon', 'E07000040');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastDunbartonshire(): self
    {
        return new self('East Dunbartonshire', 'S12000045');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastHampshire(): self
    {
        return new self('East Hampshire', 'E07000085');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastHertfordshire(): self
    {
        return new self('East Hertfordshire', 'E07000242');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastLindsey(): self
    {
        return new self('East Lindsey', 'E07000137');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastLothian(): self
    {
        return new self('East Lothian', 'S12000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastNorthamptonshire(): self
    {
        return new self('East Northamptonshire', 'E07000152');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastRenfrewshire(): self
    {
        return new self('East Renfrewshire', 'S12000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastRidingOfYorkshire(): self
    {
        return new self('East Riding of Yorkshire', 'E06000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastStaffordshire(): self
    {
        return new self('East Staffordshire', 'E07000193');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastSuffolk(): self
    {
        return new self('East Suffolk', 'E07000244');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastbourne(): self
    {
        return new self('Eastbourne', 'E07000061');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eastleigh(): self
    {
        return new self('Eastleigh', 'E07000086');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eden(): self
    {
        return new self('Eden', 'E07000030');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function elmbridge(): self
    {
        return new self('Elmbridge', 'E07000207');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function enfield(): self
    {
        return new self('Enfield', 'E09000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function eppingForest(): self
    {
        return new self('Epping Forest', 'E07000072');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function epsomAndEwell(): self
    {
        return new self('Epsom and Ewell', 'E07000208');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function erewash(): self
    {
        return new self('Erewash', 'E07000036');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function exeter(): self
    {
        return new self('Exeter', 'E07000041');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function falkirk(): self
    {
        return new self('Falkirk', 'S12000014');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function fareham(): self
    {
        return new self('Fareham', 'E07000087');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function fenland(): self
    {
        return new self('Fenland', 'E07000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function fermanaghAndOmagh(): self
    {
        return new self('Fermanagh and Omagh', 'N09000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function fife(): self
    {
        return new self('Fife', 'S12000047');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function flintshire(): self
    {
        return new self('Flintshire', 'W06000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function folkestoneAndHythe(): self
    {
        return new self('Folkestone and Hythe', 'E07000112');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function forestOfDean(): self
    {
        return new self('Forest of Dean', 'E07000080');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function fylde(): self
    {
        return new self('Fylde', 'E07000119');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function gateshead(): self
    {
        return new self('Gateshead', 'E08000037');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function gedling(): self
    {
        return new self('Gedling', 'E07000173');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function glasgowCity(): self
    {
        return new self('Glasgow City', 'S12000049');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function gloucester(): self
    {
        return new self('Gloucester', 'E07000081');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function gosport(): self
    {
        return new self('Gosport', 'E07000088');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function gravesham(): self
    {
        return new self('Gravesham', 'E07000109');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function greatYarmouth(): self
    {
        return new self('Great Yarmouth', 'E07000145');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function greenwich(): self
    {
        return new self('Greenwich', 'E09000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function guildford(): self
    {
        return new self('Guildford', 'E07000209');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function gwynedd(): self
    {
        return new self('Gwynedd', 'W06000002');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hackneyAndCityOfLondon(): self
    {
        return new self('Hackney and City of London', 'E09000012');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function halton(): self
    {
        return new self('Halton', 'E06000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hambleton(): self
    {
        return new self('Hambleton', 'E07000164');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hammersmithAndFulham(): self
    {
        return new self('Hammersmith and Fulham', 'E09000013');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function harborough(): self
    {
        return new self('Harborough', 'E07000131');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function haringey(): self
    {
        return new self('Haringey', 'E09000014');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function harlow(): self
    {
        return new self('Harlow', 'E07000073');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function harrogate(): self
    {
        return new self('Harrogate', 'E07000165');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function harrow(): self
    {
        return new self('Harrow', 'E09000015');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hart(): self
    {
        return new self('Hart', 'E07000089');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hartlepool(): self
    {
        return new self('Hartlepool', 'E06000001');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hastings(): self
    {
        return new self('Hastings', 'E07000062');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function havant(): self
    {
        return new self('Havant', 'E07000090');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function havering(): self
    {
        return new self('Havering', 'E09000016');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function herefordshireCountyOf(): self
    {
        return new self('Herefordshire, County of', 'E06000019');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hertsmere(): self
    {
        return new self('Hertsmere', 'E07000098');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function highPeak(): self
    {
        return new self('High Peak', 'E07000037');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function highland(): self
    {
        return new self('Highland', 'S12000017');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hillingdon(): self
    {
        return new self('Hillingdon', 'E09000017');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hinckleyAndBosworth(): self
    {
        return new self('Hinckley and Bosworth', 'E07000132');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function horsham(): self
    {
        return new self('Horsham', 'E07000227');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hounslow(): self
    {
        return new self('Hounslow', 'E09000018');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function huntingdonshire(): self
    {
        return new self('Huntingdonshire', 'E07000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function hyndburn(): self
    {
        return new self('Hyndburn', 'E07000120');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function inverclyde(): self
    {
        return new self('Inverclyde', 'S12000018');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ipswich(): self
    {
        return new self('Ipswich', 'E07000202');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function isleOfAnglesey(): self
    {
        return new self('Isle of Anglesey', 'W06000001');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function isleOfWight(): self
    {
        return new self('Isle of Wight', 'E06000046');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function islington(): self
    {
        return new self('Islington', 'E09000019');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function kensingtonAndChelsea(): self
    {
        return new self('Kensington and Chelsea', 'E09000020');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function kettering(): self
    {
        return new self('Kettering', 'E07000153');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function kingsLynnAndWestNorfolk(): self
    {
        return new self('King\'s Lynn and West Norfolk', 'E07000146');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function kingstonUponHullCityOf(): self
    {
        return new self('Kingston upon Hull, City of', 'E06000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function kingstonUponThames(): self
    {
        return new self('Kingston upon Thames', 'E09000021');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function kirklees(): self
    {
        return new self('Kirklees', 'E08000034');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function knowsley(): self
    {
        return new self('Knowsley', 'E08000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lambeth(): self
    {
        return new self('Lambeth', 'E09000022');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lancaster(): self
    {
        return new self('Lancaster', 'E07000121');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function leeds(): self
    {
        return new self('Leeds', 'E08000035');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function leicester(): self
    {
        return new self('Leicester', 'E06000016');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lewes(): self
    {
        return new self('Lewes', 'E07000063');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lewisham(): self
    {
        return new self('Lewisham', 'E09000023');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lichfield(): self
    {
        return new self('Lichfield', 'E07000194');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lincoln(): self
    {
        return new self('Lincoln', 'E07000138');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function lisburnAndCastlereagh(): self
    {
        return new self('Lisburn and Castlereagh', 'N09000007');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function liverpool(): self
    {
        return new self('Liverpool', 'E08000012');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function luton(): self
    {
        return new self('Luton', 'E06000032');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function maidstone(): self
    {
        return new self('Maidstone', 'E07000110');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function maldon(): self
    {
        return new self('Maldon', 'E07000074');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function malvernHills(): self
    {
        return new self('Malvern Hills', 'E07000235');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function manchester(): self
    {
        return new self('Manchester', 'E08000003');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function mansfield(): self
    {
        return new self('Mansfield', 'E07000174');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function medway(): self
    {
        return new self('Medway', 'E06000035');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function melton(): self
    {
        return new self('Melton', 'E07000133');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function mendip(): self
    {
        return new self('Mendip', 'E07000187');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function merthyrTydfil(): self
    {
        return new self('Merthyr Tydfil', 'W06000024');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function merton(): self
    {
        return new self('Merton', 'E09000024');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function midAndEastAntrim(): self
    {
        return new self('Mid and East Antrim', 'N09000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function midDevon(): self
    {
        return new self('Mid Devon', 'E07000042');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function midSuffolk(): self
    {
        return new self('Mid Suffolk', 'E07000203');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function midSussex(): self
    {
        return new self('Mid Sussex', 'E07000228');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function midUlster(): self
    {
        return new self('Mid Ulster', 'N09000009');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function middlesbrough(): self
    {
        return new self('Middlesbrough', 'E06000002');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function midlothian(): self
    {
        return new self('Midlothian', 'S12000019');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function miltonKeynes(): self
    {
        return new self('Milton Keynes', 'E06000042');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function moleValley(): self
    {
        return new self('Mole Valley', 'E07000210');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function monmouthshire(): self
    {
        return new self('Monmouthshire', 'W06000021');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function moray(): self
    {
        return new self('Moray', 'S12000020');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function neathPortTalbot(): self
    {
        return new self('Neath Port Talbot', 'W06000012');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newForest(): self
    {
        return new self('New Forest', 'E07000091');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newarkAndSherwood(): self
    {
        return new self('Newark and Sherwood', 'E07000175');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newcastleUponTyne(): self
    {
        return new self('Newcastle upon Tyne', 'E08000021');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newcastleUnderLyme(): self
    {
        return new self('Newcastle-under-Lyme', 'E07000195');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newham(): self
    {
        return new self('Newham', 'E09000025');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newport(): self
    {
        return new self('Newport', 'W06000022');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function newryMourneAndDown(): self
    {
        return new self('Newry, Mourne and Down', 'N09000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northAyrshire(): self
    {
        return new self('North Ayrshire', 'S12000021');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northDevon(): self
    {
        return new self('North Devon', 'E07000043');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northEastDerbyshire(): self
    {
        return new self('North East Derbyshire', 'E07000038');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northEastLincolnshire(): self
    {
        return new self('North East Lincolnshire', 'E06000012');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northHertfordshire(): self
    {
        return new self('North Hertfordshire', 'E07000099');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northKesteven(): self
    {
        return new self('North Kesteven', 'E07000139');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northLanarkshire(): self
    {
        return new self('North Lanarkshire', 'S12000050');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northLincolnshire(): self
    {
        return new self('North Lincolnshire', 'E06000013');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northNorfolk(): self
    {
        return new self('North Norfolk', 'E07000147');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northSomerset(): self
    {
        return new self('North Somerset', 'E06000024');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northTyneside(): self
    {
        return new self('North Tyneside', 'E08000022');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northWarwickshire(): self
    {
        return new self('North Warwickshire', 'E07000218');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northWestLeicestershire(): self
    {
        return new self('North West Leicestershire', 'E07000134');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northampton(): self
    {
        return new self('Northampton', 'E07000154');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function northumberland(): self
    {
        return new self('Northumberland', 'E06000057');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function norwich(): self
    {
        return new self('Norwich', 'E07000148');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function nottingham(): self
    {
        return new self('Nottingham', 'E06000018');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function nuneatonAndBedworth(): self
    {
        return new self('Nuneaton and Bedworth', 'E07000219');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function oadbyAndWigston(): self
    {
        return new self('Oadby and Wigston', 'E07000135');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function oldham(): self
    {
        return new self('Oldham', 'E08000004');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function orkneyIslands(): self
    {
        return new self('Orkney Islands', 'S12000023');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function oxford(): self
    {
        return new self('Oxford', 'E07000178');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function pembrokeshire(): self
    {
        return new self('Pembrokeshire', 'W06000009');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function pendle(): self
    {
        return new self('Pendle', 'E07000122');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function perthAndKinross(): self
    {
        return new self('Perth and Kinross', 'S12000048');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function peterborough(): self
    {
        return new self('Peterborough', 'E06000031');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function plymouth(): self
    {
        return new self('Plymouth', 'E06000026');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function portsmouth(): self
    {
        return new self('Portsmouth', 'E06000044');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function powys(): self
    {
        return new self('Powys', 'W06000023');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function preston(): self
    {
        return new self('Preston', 'E07000123');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function reading(): self
    {
        return new self('Reading', 'E06000038');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function redbridge(): self
    {
        return new self('Redbridge', 'E09000026');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function redcarAndCleveland(): self
    {
        return new self('Redcar and Cleveland', 'E06000003');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function redditch(): self
    {
        return new self('Redditch', 'E07000236');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function reigateAndBanstead(): self
    {
        return new self('Reigate and Banstead', 'E07000211');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function renfrewshire(): self
    {
        return new self('Renfrewshire', 'S12000038');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function residentOutsideWales(): self
    {
        return new self('Resident outside Wales', null);
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rhonddaCynonTaf(): self
    {
        return new self('Rhondda Cynon Taf', 'W06000016');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ribbleValley(): self
    {
        return new self('Ribble Valley', 'E07000124');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function richmondUponThames(): self
    {
        return new self('Richmond upon Thames', 'E09000027');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function richmondshire(): self
    {
        return new self('Richmondshire', 'E07000166');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rochdale(): self
    {
        return new self('Rochdale', 'E08000005');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rochford(): self
    {
        return new self('Rochford', 'E07000075');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rossendale(): self
    {
        return new self('Rossendale', 'E07000125');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rother(): self
    {
        return new self('Rother', 'E07000064');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rotherham(): self
    {
        return new self('Rotherham', 'E08000018');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rugby(): self
    {
        return new self('Rugby', 'E07000220');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function runnymede(): self
    {
        return new self('Runnymede', 'E07000212');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rushcliffe(): self
    {
        return new self('Rushcliffe', 'E07000176');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rushmoor(): self
    {
        return new self('Rushmoor', 'E07000092');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function rutland(): self
    {
        return new self('Rutland', 'E06000017');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function ryedale(): self
    {
        return new self('Ryedale', 'E07000167');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function salford(): self
    {
        return new self('Salford', 'E08000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sandwell(): self
    {
        return new self('Sandwell', 'E08000028');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function scarborough(): self
    {
        return new self('Scarborough', 'E07000168');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function scottishBorders(): self
    {
        return new self('Scottish Borders', 'S12000026');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sedgemoor(): self
    {
        return new self('Sedgemoor', 'E07000188');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sefton(): self
    {
        return new self('Sefton', 'E08000014');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function selby(): self
    {
        return new self('Selby', 'E07000169');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sevenoaks(): self
    {
        return new self('Sevenoaks', 'E07000111');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sheffield(): self
    {
        return new self('Sheffield', 'E08000019');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function shetlandIslands(): self
    {
        return new self('Shetland Islands', 'S12000027');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function shropshire(): self
    {
        return new self('Shropshire', 'E06000051');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function slough(): self
    {
        return new self('Slough', 'E06000039');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function solihull(): self
    {
        return new self('Solihull', 'E08000029');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function somersetWestAndTaunton(): self
    {
        return new self('Somerset West and Taunton', 'E07000246');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southAyrshire(): self
    {
        return new self('South Ayrshire', 'S12000028');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southBucks(): self
    {
        return new self('South Bucks', 'E07000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southCambridgeshire(): self
    {
        return new self('South Cambridgeshire', 'E07000012');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southDerbyshire(): self
    {
        return new self('South Derbyshire', 'E07000039');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southGloucestershire(): self
    {
        return new self('South Gloucestershire', 'E06000025');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southHams(): self
    {
        return new self('South Hams', 'E07000044');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southHolland(): self
    {
        return new self('South Holland', 'E07000140');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southKesteven(): self
    {
        return new self('South Kesteven', 'E07000141');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southLakeland(): self
    {
        return new self('South Lakeland', 'E07000031');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southLanarkshire(): self
    {
        return new self('South Lanarkshire', 'S12000029');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southNorfolk(): self
    {
        return new self('South Norfolk', 'E07000149');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southNorthamptonshire(): self
    {
        return new self('South Northamptonshire', 'E07000155');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southOxfordshire(): self
    {
        return new self('South Oxfordshire', 'E07000179');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southRibble(): self
    {
        return new self('South Ribble', 'E07000126');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southSomerset(): self
    {
        return new self('South Somerset', 'E07000189');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southStaffordshire(): self
    {
        return new self('South Staffordshire', 'E07000196');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southTyneside(): self
    {
        return new self('South Tyneside', 'E08000023');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southampton(): self
    {
        return new self('Southampton', 'E06000045');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southendOnSea(): self
    {
        return new self('Southend-on-Sea', 'E06000033');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function southwark(): self
    {
        return new self('Southwark', 'E09000028');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function spelthorne(): self
    {
        return new self('Spelthorne', 'E07000213');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stAlbans(): self
    {
        return new self('St Albans', 'E07000240');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stHelens(): self
    {
        return new self('St. Helens', 'E08000013');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stafford(): self
    {
        return new self('Stafford', 'E07000197');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function staffordshireMoorlands(): self
    {
        return new self('Staffordshire Moorlands', 'E07000198');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stevenage(): self
    {
        return new self('Stevenage', 'E07000243');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stirling(): self
    {
        return new self('Stirling', 'S12000030');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stockport(): self
    {
        return new self('Stockport', 'E08000007');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stocktonOnTees(): self
    {
        return new self('Stockton-on-Tees', 'E06000004');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stokeOnTrent(): self
    {
        return new self('Stoke-on-Trent', 'E06000021');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stratfordOnAvon(): self
    {
        return new self('Stratford-on-Avon', 'E07000221');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function stroud(): self
    {
        return new self('Stroud', 'E07000082');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sunderland(): self
    {
        return new self('Sunderland', 'E08000024');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function surreyHeath(): self
    {
        return new self('Surrey Heath', 'E07000214');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function sutton(): self
    {
        return new self('Sutton', 'E09000029');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function swale(): self
    {
        return new self('Swale', 'E07000113');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function swansea(): self
    {
        return new self('Swansea', 'W06000011');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function swindon(): self
    {
        return new self('Swindon', 'E06000030');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tameside(): self
    {
        return new self('Tameside', 'E08000008');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tamworth(): self
    {
        return new self('Tamworth', 'E07000199');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tandridge(): self
    {
        return new self('Tandridge', 'E07000215');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function teignbridge(): self
    {
        return new self('Teignbridge', 'E07000045');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function telfordAndWrekin(): self
    {
        return new self('Telford and Wrekin', 'E06000020');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tendring(): self
    {
        return new self('Tendring', 'E07000076');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function testValley(): self
    {
        return new self('Test Valley', 'E07000093');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tewkesbury(): self
    {
        return new self('Tewkesbury', 'E07000083');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function thanet(): self
    {
        return new self('Thanet', 'E07000114');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function threeRivers(): self
    {
        return new self('Three Rivers', 'E07000102');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function thurrock(): self
    {
        return new self('Thurrock', 'E06000034');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tonbridgeAndMalling(): self
    {
        return new self('Tonbridge and Malling', 'E07000115');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function torbay(): self
    {
        return new self('Torbay', 'E06000027');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function torfaen(): self
    {
        return new self('Torfaen', 'W06000020');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function torridge(): self
    {
        return new self('Torridge', 'E07000046');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function towerHamlets(): self
    {
        return new self('Tower Hamlets', 'E09000030');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function trafford(): self
    {
        return new self('Trafford', 'E08000009');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function tunbridgeWells(): self
    {
        return new self('Tunbridge Wells', 'E07000116');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function uttlesford(): self
    {
        return new self('Uttlesford', 'E07000077');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function valeOfGlamorgan(): self
    {
        return new self('Vale of Glamorgan', 'W06000014');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function valeOfWhiteHorse(): self
    {
        return new self('Vale of White Horse', 'E07000180');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wakefield(): self
    {
        return new self('Wakefield', 'E08000036');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function walsall(): self
    {
        return new self('Walsall', 'E08000030');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function walthamForest(): self
    {
        return new self('Waltham Forest', 'E09000031');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wandsworth(): self
    {
        return new self('Wandsworth', 'E09000032');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function warrington(): self
    {
        return new self('Warrington', 'E06000007');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function warwick(): self
    {
        return new self('Warwick', 'E07000222');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function watford(): self
    {
        return new self('Watford', 'E07000103');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function waverley(): self
    {
        return new self('Waverley', 'E07000216');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wealden(): self
    {
        return new self('Wealden', 'E07000065');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wellingborough(): self
    {
        return new self('Wellingborough', 'E07000156');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function welwynHatfield(): self
    {
        return new self('Welwyn Hatfield', 'E07000241');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westBerkshire(): self
    {
        return new self('West Berkshire', 'E06000037');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westDevon(): self
    {
        return new self('West Devon', 'E07000047');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westDunbartonshire(): self
    {
        return new self('West Dunbartonshire', 'S12000039');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westLancashire(): self
    {
        return new self('West Lancashire', 'E07000127');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westLindsey(): self
    {
        return new self('West Lindsey', 'E07000142');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westLothian(): self
    {
        return new self('West Lothian', 'S12000040');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westOxfordshire(): self
    {
        return new self('West Oxfordshire', 'E07000181');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westSuffolk(): self
    {
        return new self('West Suffolk', 'E07000245');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function westminster(): self
    {
        return new self('Westminster', 'E09000033');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wigan(): self
    {
        return new self('Wigan', 'E08000010');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wiltshire(): self
    {
        return new self('Wiltshire', 'E06000054');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function winchester(): self
    {
        return new self('Winchester', 'E07000094');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function windsorAndMaidenhead(): self
    {
        return new self('Windsor and Maidenhead', 'E06000040');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wirral(): self
    {
        return new self('Wirral', 'E08000015');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function woking(): self
    {
        return new self('Woking', 'E07000217');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wokingham(): self
    {
        return new self('Wokingham', 'E06000041');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wolverhampton(): self
    {
        return new self('Wolverhampton', 'E08000031');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function worcester(): self
    {
        return new self('Worcester', 'E07000237');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function worthing(): self
    {
        return new self('Worthing', 'E07000229');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wrexham(): self
    {
        return new self('Wrexham', 'W06000006');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wychavon(): self
    {
        return new self('Wychavon', 'E07000238');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wycombe(): self
    {
        return new self('Wycombe', 'E07000007');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wyre(): self
    {
        return new self('Wyre', 'E07000128');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
     */
    public static function wyreForest(): self
    {
        return new self('Wyre Forest', 'E07000239');
    }

    /**
     * @return \PHECovid\Client\Model\Ltla
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
