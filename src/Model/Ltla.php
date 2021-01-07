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

namespace PHECovid\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Ltla
{
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
     * @return \PHECovid\Model\Ltla
     */
    public static function aberdeenCity(): self
    {
        return new self('Aberdeen City', 'S12000033');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function aberdeenshire(): self
    {
        return new self('Aberdeenshire', 'S12000034');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function adur(): self
    {
        return new self('Adur', 'E07000223');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function allerdale(): self
    {
        return new self('Allerdale', 'E07000026');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function amberValley(): self
    {
        return new self('Amber Valley', 'E07000032');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function angus(): self
    {
        return new self('Angus', 'S12000041');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function antrimAndNewtownabbey(): self
    {
        return new self('Antrim and Newtownabbey', 'N09000001');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ardsAndNorthDown(): self
    {
        return new self('Ards and North Down', 'N09000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function argyllAndBute(): self
    {
        return new self('Argyll and Bute', 'S12000035');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function armaghCityBanbridgeAndCraigavon(): self
    {
        return new self('Armagh City, Banbridge and Craigavon', 'N09000002');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function arun(): self
    {
        return new self('Arun', 'E07000224');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ashfield(): self
    {
        return new self('Ashfield', 'E07000170');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ashford(): self
    {
        return new self('Ashford', 'E07000105');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function aylesburyVale(): self
    {
        return new self('Aylesbury Vale', 'E07000004');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function babergh(): self
    {
        return new self('Babergh', 'E07000200');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barkingAndDagenham(): self
    {
        return new self('Barking and Dagenham', 'E09000002');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barnet(): self
    {
        return new self('Barnet', 'E09000003');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barnsley(): self
    {
        return new self('Barnsley', 'E08000016');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barrowInFurness(): self
    {
        return new self('Barrow-in-Furness', 'E07000027');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function basildon(): self
    {
        return new self('Basildon', 'E07000066');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function basingstokeAndDeane(): self
    {
        return new self('Basingstoke and Deane', 'E07000084');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bassetlaw(): self
    {
        return new self('Bassetlaw', 'E07000171');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bathAndNorthEastSomerset(): self
    {
        return new self('Bath and North East Somerset', 'E06000022');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bedford(): self
    {
        return new self('Bedford', 'E06000055');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function belfast(): self
    {
        return new self('Belfast', 'N09000003');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bexley(): self
    {
        return new self('Bexley', 'E09000004');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function birmingham(): self
    {
        return new self('Birmingham', 'E08000025');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blaby(): self
    {
        return new self('Blaby', 'E07000129');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blackburnWithDarwen(): self
    {
        return new self('Blackburn with Darwen', 'E06000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blackpool(): self
    {
        return new self('Blackpool', 'E06000009');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blaenauGwent(): self
    {
        return new self('Blaenau Gwent', 'W06000019');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bolsover(): self
    {
        return new self('Bolsover', 'E07000033');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bolton(): self
    {
        return new self('Bolton', 'E08000001');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function boston(): self
    {
        return new self('Boston', 'E07000136');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bournemouthChristchurchAndPoole(): self
    {
        return new self('Bournemouth, Christchurch and Poole', 'E06000058');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bracknellForest(): self
    {
        return new self('Bracknell Forest', 'E06000036');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bradford(): self
    {
        return new self('Bradford', 'E08000032');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function braintree(): self
    {
        return new self('Braintree', 'E07000067');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function breckland(): self
    {
        return new self('Breckland', 'E07000143');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function brent(): self
    {
        return new self('Brent', 'E09000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function brentwood(): self
    {
        return new self('Brentwood', 'E07000068');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bridgend(): self
    {
        return new self('Bridgend', 'W06000013');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function brightonAndHove(): self
    {
        return new self('Brighton and Hove', 'E06000043');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bristolCityOf(): self
    {
        return new self('Bristol, City of', 'E06000023');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function broadland(): self
    {
        return new self('Broadland', 'E07000144');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bromley(): self
    {
        return new self('Bromley', 'E09000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bromsgrove(): self
    {
        return new self('Bromsgrove', 'E07000234');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function broxbourne(): self
    {
        return new self('Broxbourne', 'E07000095');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function broxtowe(): self
    {
        return new self('Broxtowe', 'E07000172');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function burnley(): self
    {
        return new self('Burnley', 'E07000117');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bury(): self
    {
        return new self('Bury', 'E08000002');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function caerphilly(): self
    {
        return new self('Caerphilly', 'W06000018');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function calderdale(): self
    {
        return new self('Calderdale', 'E08000033');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cambridge(): self
    {
        return new self('Cambridge', 'E07000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function camden(): self
    {
        return new self('Camden', 'E09000007');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cannockChase(): self
    {
        return new self('Cannock Chase', 'E07000192');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function canterbury(): self
    {
        return new self('Canterbury', 'E07000106');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cardiff(): self
    {
        return new self('Cardiff', 'W06000015');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function carlisle(): self
    {
        return new self('Carlisle', 'E07000028');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function carmarthenshire(): self
    {
        return new self('Carmarthenshire', 'W06000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function castlePoint(): self
    {
        return new self('Castle Point', 'E07000069');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function causewayCoastAndGlens(): self
    {
        return new self('Causeway Coast and Glens', 'N09000004');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function centralBedfordshire(): self
    {
        return new self('Central Bedfordshire', 'E06000056');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ceredigion(): self
    {
        return new self('Ceredigion', 'W06000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function charnwood(): self
    {
        return new self('Charnwood', 'E07000130');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chelmsford(): self
    {
        return new self('Chelmsford', 'E07000070');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cheltenham(): self
    {
        return new self('Cheltenham', 'E07000078');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cherwell(): self
    {
        return new self('Cherwell', 'E07000177');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cheshireEast(): self
    {
        return new self('Cheshire East', 'E06000049');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cheshireWestAndChester(): self
    {
        return new self('Cheshire West and Chester', 'E06000050');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chesterfield(): self
    {
        return new self('Chesterfield', 'E07000034');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chichester(): self
    {
        return new self('Chichester', 'E07000225');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chiltern(): self
    {
        return new self('Chiltern', 'E07000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chorley(): self
    {
        return new self('Chorley', 'E07000118');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cityOfEdinburgh(): self
    {
        return new self('City of Edinburgh', 'S12000036');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function clackmannanshire(): self
    {
        return new self('Clackmannanshire', 'S12000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function colchester(): self
    {
        return new self('Colchester', 'E07000071');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function comhairleNanEileanSiar(): self
    {
        return new self('Comhairle nan Eilean Siar', 'S12000013');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function conwy(): self
    {
        return new self('Conwy', 'W06000003');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function copeland(): self
    {
        return new self('Copeland', 'E07000029');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function corby(): self
    {
        return new self('Corby', 'E07000150');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cornwallAndIslesOfScilly(): self
    {
        return new self('Cornwall and Isles of Scilly', 'E06000052');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cotswold(): self
    {
        return new self('Cotswold', 'E07000079');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function countyDurham(): self
    {
        return new self('County Durham', 'E06000047');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function coventry(): self
    {
        return new self('Coventry', 'E08000026');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function craven(): self
    {
        return new self('Craven', 'E07000163');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function crawley(): self
    {
        return new self('Crawley', 'E07000226');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function croydon(): self
    {
        return new self('Croydon', 'E09000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dacorum(): self
    {
        return new self('Dacorum', 'E07000096');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function darlington(): self
    {
        return new self('Darlington', 'E06000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dartford(): self
    {
        return new self('Dartford', 'E07000107');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function daventry(): self
    {
        return new self('Daventry', 'E07000151');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function denbighshire(): self
    {
        return new self('Denbighshire', 'W06000004');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function derby(): self
    {
        return new self('Derby', 'E06000015');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function derbyshireDales(): self
    {
        return new self('Derbyshire Dales', 'E07000035');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function derryCityAndStrabane(): self
    {
        return new self('Derry City and Strabane', 'N09000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function doncaster(): self
    {
        return new self('Doncaster', 'E08000017');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dorset(): self
    {
        return new self('Dorset', 'E06000059');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dover(): self
    {
        return new self('Dover', 'E07000108');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dudley(): self
    {
        return new self('Dudley', 'E08000027');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dumfriesAndGalloway(): self
    {
        return new self('Dumfries and Galloway', 'S12000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dundeeCity(): self
    {
        return new self('Dundee City', 'S12000042');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ealing(): self
    {
        return new self('Ealing', 'E09000009');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastAyrshire(): self
    {
        return new self('East Ayrshire', 'S12000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastCambridgeshire(): self
    {
        return new self('East Cambridgeshire', 'E07000009');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastDevon(): self
    {
        return new self('East Devon', 'E07000040');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastDunbartonshire(): self
    {
        return new self('East Dunbartonshire', 'S12000045');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastHampshire(): self
    {
        return new self('East Hampshire', 'E07000085');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastHertfordshire(): self
    {
        return new self('East Hertfordshire', 'E07000242');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastLindsey(): self
    {
        return new self('East Lindsey', 'E07000137');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastLothian(): self
    {
        return new self('East Lothian', 'S12000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastNorthamptonshire(): self
    {
        return new self('East Northamptonshire', 'E07000152');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastRenfrewshire(): self
    {
        return new self('East Renfrewshire', 'S12000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastRidingOfYorkshire(): self
    {
        return new self('East Riding of Yorkshire', 'E06000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastStaffordshire(): self
    {
        return new self('East Staffordshire', 'E07000193');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastSuffolk(): self
    {
        return new self('East Suffolk', 'E07000244');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastbourne(): self
    {
        return new self('Eastbourne', 'E07000061');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastleigh(): self
    {
        return new self('Eastleigh', 'E07000086');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eden(): self
    {
        return new self('Eden', 'E07000030');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function elmbridge(): self
    {
        return new self('Elmbridge', 'E07000207');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function enfield(): self
    {
        return new self('Enfield', 'E09000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eppingForest(): self
    {
        return new self('Epping Forest', 'E07000072');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function epsomAndEwell(): self
    {
        return new self('Epsom and Ewell', 'E07000208');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function erewash(): self
    {
        return new self('Erewash', 'E07000036');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function exeter(): self
    {
        return new self('Exeter', 'E07000041');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function falkirk(): self
    {
        return new self('Falkirk', 'S12000014');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fareham(): self
    {
        return new self('Fareham', 'E07000087');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fenland(): self
    {
        return new self('Fenland', 'E07000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fermanaghAndOmagh(): self
    {
        return new self('Fermanagh and Omagh', 'N09000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fife(): self
    {
        return new self('Fife', 'S12000047');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function flintshire(): self
    {
        return new self('Flintshire', 'W06000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function folkestoneAndHythe(): self
    {
        return new self('Folkestone and Hythe', 'E07000112');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function forestOfDean(): self
    {
        return new self('Forest of Dean', 'E07000080');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fylde(): self
    {
        return new self('Fylde', 'E07000119');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gateshead(): self
    {
        return new self('Gateshead', 'E08000037');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gedling(): self
    {
        return new self('Gedling', 'E07000173');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function glasgowCity(): self
    {
        return new self('Glasgow City', 'S12000049');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gloucester(): self
    {
        return new self('Gloucester', 'E07000081');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gosport(): self
    {
        return new self('Gosport', 'E07000088');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gravesham(): self
    {
        return new self('Gravesham', 'E07000109');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function greatYarmouth(): self
    {
        return new self('Great Yarmouth', 'E07000145');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function greenwich(): self
    {
        return new self('Greenwich', 'E09000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function guildford(): self
    {
        return new self('Guildford', 'E07000209');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gwynedd(): self
    {
        return new self('Gwynedd', 'W06000002');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hackneyAndCityOfLondon(): self
    {
        return new self('Hackney and City of London', 'E09000012');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function halton(): self
    {
        return new self('Halton', 'E06000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hambleton(): self
    {
        return new self('Hambleton', 'E07000164');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hammersmithAndFulham(): self
    {
        return new self('Hammersmith and Fulham', 'E09000013');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harborough(): self
    {
        return new self('Harborough', 'E07000131');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function haringey(): self
    {
        return new self('Haringey', 'E09000014');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harlow(): self
    {
        return new self('Harlow', 'E07000073');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harrogate(): self
    {
        return new self('Harrogate', 'E07000165');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harrow(): self
    {
        return new self('Harrow', 'E09000015');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hart(): self
    {
        return new self('Hart', 'E07000089');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hartlepool(): self
    {
        return new self('Hartlepool', 'E06000001');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hastings(): self
    {
        return new self('Hastings', 'E07000062');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function havant(): self
    {
        return new self('Havant', 'E07000090');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function havering(): self
    {
        return new self('Havering', 'E09000016');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function herefordshireCountyOf(): self
    {
        return new self('Herefordshire, County of', 'E06000019');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hertsmere(): self
    {
        return new self('Hertsmere', 'E07000098');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function highPeak(): self
    {
        return new self('High Peak', 'E07000037');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function highland(): self
    {
        return new self('Highland', 'S12000017');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hillingdon(): self
    {
        return new self('Hillingdon', 'E09000017');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hinckleyAndBosworth(): self
    {
        return new self('Hinckley and Bosworth', 'E07000132');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function horsham(): self
    {
        return new self('Horsham', 'E07000227');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hounslow(): self
    {
        return new self('Hounslow', 'E09000018');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function huntingdonshire(): self
    {
        return new self('Huntingdonshire', 'E07000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hyndburn(): self
    {
        return new self('Hyndburn', 'E07000120');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function inverclyde(): self
    {
        return new self('Inverclyde', 'S12000018');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ipswich(): self
    {
        return new self('Ipswich', 'E07000202');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function isleOfAnglesey(): self
    {
        return new self('Isle of Anglesey', 'W06000001');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function isleOfWight(): self
    {
        return new self('Isle of Wight', 'E06000046');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function islington(): self
    {
        return new self('Islington', 'E09000019');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kensingtonAndChelsea(): self
    {
        return new self('Kensington and Chelsea', 'E09000020');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kettering(): self
    {
        return new self('Kettering', 'E07000153');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kingsLynnAndWestNorfolk(): self
    {
        return new self('King\'s Lynn and West Norfolk', 'E07000146');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kingstonUponHullCityOf(): self
    {
        return new self('Kingston upon Hull, City of', 'E06000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kingstonUponThames(): self
    {
        return new self('Kingston upon Thames', 'E09000021');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kirklees(): self
    {
        return new self('Kirklees', 'E08000034');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function knowsley(): self
    {
        return new self('Knowsley', 'E08000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lambeth(): self
    {
        return new self('Lambeth', 'E09000022');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lancaster(): self
    {
        return new self('Lancaster', 'E07000121');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function leeds(): self
    {
        return new self('Leeds', 'E08000035');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function leicester(): self
    {
        return new self('Leicester', 'E06000016');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lewes(): self
    {
        return new self('Lewes', 'E07000063');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lewisham(): self
    {
        return new self('Lewisham', 'E09000023');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lichfield(): self
    {
        return new self('Lichfield', 'E07000194');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lincoln(): self
    {
        return new self('Lincoln', 'E07000138');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lisburnAndCastlereagh(): self
    {
        return new self('Lisburn and Castlereagh', 'N09000007');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function liverpool(): self
    {
        return new self('Liverpool', 'E08000012');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function luton(): self
    {
        return new self('Luton', 'E06000032');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function maidstone(): self
    {
        return new self('Maidstone', 'E07000110');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function maldon(): self
    {
        return new self('Maldon', 'E07000074');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function malvernHills(): self
    {
        return new self('Malvern Hills', 'E07000235');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function manchester(): self
    {
        return new self('Manchester', 'E08000003');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function mansfield(): self
    {
        return new self('Mansfield', 'E07000174');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function medway(): self
    {
        return new self('Medway', 'E06000035');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function melton(): self
    {
        return new self('Melton', 'E07000133');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function mendip(): self
    {
        return new self('Mendip', 'E07000187');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function merthyrTydfil(): self
    {
        return new self('Merthyr Tydfil', 'W06000024');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function merton(): self
    {
        return new self('Merton', 'E09000024');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midAndEastAntrim(): self
    {
        return new self('Mid and East Antrim', 'N09000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midDevon(): self
    {
        return new self('Mid Devon', 'E07000042');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midSuffolk(): self
    {
        return new self('Mid Suffolk', 'E07000203');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midSussex(): self
    {
        return new self('Mid Sussex', 'E07000228');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midUlster(): self
    {
        return new self('Mid Ulster', 'N09000009');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function middlesbrough(): self
    {
        return new self('Middlesbrough', 'E06000002');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midlothian(): self
    {
        return new self('Midlothian', 'S12000019');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function miltonKeynes(): self
    {
        return new self('Milton Keynes', 'E06000042');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function moleValley(): self
    {
        return new self('Mole Valley', 'E07000210');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function monmouthshire(): self
    {
        return new self('Monmouthshire', 'W06000021');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function moray(): self
    {
        return new self('Moray', 'S12000020');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function neathPortTalbot(): self
    {
        return new self('Neath Port Talbot', 'W06000012');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newForest(): self
    {
        return new self('New Forest', 'E07000091');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newarkAndSherwood(): self
    {
        return new self('Newark and Sherwood', 'E07000175');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newcastleUponTyne(): self
    {
        return new self('Newcastle upon Tyne', 'E08000021');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newcastleUnderLyme(): self
    {
        return new self('Newcastle-under-Lyme', 'E07000195');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newham(): self
    {
        return new self('Newham', 'E09000025');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newport(): self
    {
        return new self('Newport', 'W06000022');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newryMourneAndDown(): self
    {
        return new self('Newry, Mourne and Down', 'N09000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northAyrshire(): self
    {
        return new self('North Ayrshire', 'S12000021');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northDevon(): self
    {
        return new self('North Devon', 'E07000043');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northEastDerbyshire(): self
    {
        return new self('North East Derbyshire', 'E07000038');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northEastLincolnshire(): self
    {
        return new self('North East Lincolnshire', 'E06000012');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northHertfordshire(): self
    {
        return new self('North Hertfordshire', 'E07000099');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northKesteven(): self
    {
        return new self('North Kesteven', 'E07000139');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northLanarkshire(): self
    {
        return new self('North Lanarkshire', 'S12000050');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northLincolnshire(): self
    {
        return new self('North Lincolnshire', 'E06000013');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northNorfolk(): self
    {
        return new self('North Norfolk', 'E07000147');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northSomerset(): self
    {
        return new self('North Somerset', 'E06000024');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northTyneside(): self
    {
        return new self('North Tyneside', 'E08000022');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northWarwickshire(): self
    {
        return new self('North Warwickshire', 'E07000218');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northWestLeicestershire(): self
    {
        return new self('North West Leicestershire', 'E07000134');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northampton(): self
    {
        return new self('Northampton', 'E07000154');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northumberland(): self
    {
        return new self('Northumberland', 'E06000057');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function norwich(): self
    {
        return new self('Norwich', 'E07000148');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function nottingham(): self
    {
        return new self('Nottingham', 'E06000018');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function nuneatonAndBedworth(): self
    {
        return new self('Nuneaton and Bedworth', 'E07000219');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function oadbyAndWigston(): self
    {
        return new self('Oadby and Wigston', 'E07000135');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function oldham(): self
    {
        return new self('Oldham', 'E08000004');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function orkneyIslands(): self
    {
        return new self('Orkney Islands', 'S12000023');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function oxford(): self
    {
        return new self('Oxford', 'E07000178');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function pembrokeshire(): self
    {
        return new self('Pembrokeshire', 'W06000009');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function pendle(): self
    {
        return new self('Pendle', 'E07000122');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function perthAndKinross(): self
    {
        return new self('Perth and Kinross', 'S12000048');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function peterborough(): self
    {
        return new self('Peterborough', 'E06000031');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function plymouth(): self
    {
        return new self('Plymouth', 'E06000026');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function portsmouth(): self
    {
        return new self('Portsmouth', 'E06000044');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function powys(): self
    {
        return new self('Powys', 'W06000023');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function preston(): self
    {
        return new self('Preston', 'E07000123');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function reading(): self
    {
        return new self('Reading', 'E06000038');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function redbridge(): self
    {
        return new self('Redbridge', 'E09000026');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function redcarAndCleveland(): self
    {
        return new self('Redcar and Cleveland', 'E06000003');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function redditch(): self
    {
        return new self('Redditch', 'E07000236');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function reigateAndBanstead(): self
    {
        return new self('Reigate and Banstead', 'E07000211');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function renfrewshire(): self
    {
        return new self('Renfrewshire', 'S12000038');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function residentOutsideWales(): self
    {
        return new self('Resident outside Wales', null);
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rhonddaCynonTaf(): self
    {
        return new self('Rhondda Cynon Taf', 'W06000016');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ribbleValley(): self
    {
        return new self('Ribble Valley', 'E07000124');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function richmondUponThames(): self
    {
        return new self('Richmond upon Thames', 'E09000027');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function richmondshire(): self
    {
        return new self('Richmondshire', 'E07000166');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rochdale(): self
    {
        return new self('Rochdale', 'E08000005');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rochford(): self
    {
        return new self('Rochford', 'E07000075');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rossendale(): self
    {
        return new self('Rossendale', 'E07000125');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rother(): self
    {
        return new self('Rother', 'E07000064');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rotherham(): self
    {
        return new self('Rotherham', 'E08000018');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rugby(): self
    {
        return new self('Rugby', 'E07000220');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function runnymede(): self
    {
        return new self('Runnymede', 'E07000212');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rushcliffe(): self
    {
        return new self('Rushcliffe', 'E07000176');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rushmoor(): self
    {
        return new self('Rushmoor', 'E07000092');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rutland(): self
    {
        return new self('Rutland', 'E06000017');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ryedale(): self
    {
        return new self('Ryedale', 'E07000167');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function salford(): self
    {
        return new self('Salford', 'E08000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sandwell(): self
    {
        return new self('Sandwell', 'E08000028');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function scarborough(): self
    {
        return new self('Scarborough', 'E07000168');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function scottishBorders(): self
    {
        return new self('Scottish Borders', 'S12000026');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sedgemoor(): self
    {
        return new self('Sedgemoor', 'E07000188');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sefton(): self
    {
        return new self('Sefton', 'E08000014');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function selby(): self
    {
        return new self('Selby', 'E07000169');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sevenoaks(): self
    {
        return new self('Sevenoaks', 'E07000111');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sheffield(): self
    {
        return new self('Sheffield', 'E08000019');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function shetlandIslands(): self
    {
        return new self('Shetland Islands', 'S12000027');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function shropshire(): self
    {
        return new self('Shropshire', 'E06000051');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function slough(): self
    {
        return new self('Slough', 'E06000039');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function solihull(): self
    {
        return new self('Solihull', 'E08000029');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function somersetWestAndTaunton(): self
    {
        return new self('Somerset West and Taunton', 'E07000246');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southAyrshire(): self
    {
        return new self('South Ayrshire', 'S12000028');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southBucks(): self
    {
        return new self('South Bucks', 'E07000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southCambridgeshire(): self
    {
        return new self('South Cambridgeshire', 'E07000012');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southDerbyshire(): self
    {
        return new self('South Derbyshire', 'E07000039');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southGloucestershire(): self
    {
        return new self('South Gloucestershire', 'E06000025');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southHams(): self
    {
        return new self('South Hams', 'E07000044');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southHolland(): self
    {
        return new self('South Holland', 'E07000140');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southKesteven(): self
    {
        return new self('South Kesteven', 'E07000141');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southLakeland(): self
    {
        return new self('South Lakeland', 'E07000031');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southLanarkshire(): self
    {
        return new self('South Lanarkshire', 'S12000029');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southNorfolk(): self
    {
        return new self('South Norfolk', 'E07000149');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southNorthamptonshire(): self
    {
        return new self('South Northamptonshire', 'E07000155');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southOxfordshire(): self
    {
        return new self('South Oxfordshire', 'E07000179');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southRibble(): self
    {
        return new self('South Ribble', 'E07000126');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southSomerset(): self
    {
        return new self('South Somerset', 'E07000189');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southStaffordshire(): self
    {
        return new self('South Staffordshire', 'E07000196');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southTyneside(): self
    {
        return new self('South Tyneside', 'E08000023');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southampton(): self
    {
        return new self('Southampton', 'E06000045');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southendOnSea(): self
    {
        return new self('Southend-on-Sea', 'E06000033');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southwark(): self
    {
        return new self('Southwark', 'E09000028');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function spelthorne(): self
    {
        return new self('Spelthorne', 'E07000213');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stAlbans(): self
    {
        return new self('St Albans', 'E07000240');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stHelens(): self
    {
        return new self('St. Helens', 'E08000013');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stafford(): self
    {
        return new self('Stafford', 'E07000197');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function staffordshireMoorlands(): self
    {
        return new self('Staffordshire Moorlands', 'E07000198');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stevenage(): self
    {
        return new self('Stevenage', 'E07000243');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stirling(): self
    {
        return new self('Stirling', 'S12000030');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stockport(): self
    {
        return new self('Stockport', 'E08000007');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stocktonOnTees(): self
    {
        return new self('Stockton-on-Tees', 'E06000004');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stokeOnTrent(): self
    {
        return new self('Stoke-on-Trent', 'E06000021');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stratfordOnAvon(): self
    {
        return new self('Stratford-on-Avon', 'E07000221');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stroud(): self
    {
        return new self('Stroud', 'E07000082');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sunderland(): self
    {
        return new self('Sunderland', 'E08000024');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function surreyHeath(): self
    {
        return new self('Surrey Heath', 'E07000214');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sutton(): self
    {
        return new self('Sutton', 'E09000029');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function swale(): self
    {
        return new self('Swale', 'E07000113');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function swansea(): self
    {
        return new self('Swansea', 'W06000011');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function swindon(): self
    {
        return new self('Swindon', 'E06000030');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tameside(): self
    {
        return new self('Tameside', 'E08000008');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tamworth(): self
    {
        return new self('Tamworth', 'E07000199');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tandridge(): self
    {
        return new self('Tandridge', 'E07000215');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function teignbridge(): self
    {
        return new self('Teignbridge', 'E07000045');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function telfordAndWrekin(): self
    {
        return new self('Telford and Wrekin', 'E06000020');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tendring(): self
    {
        return new self('Tendring', 'E07000076');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function testValley(): self
    {
        return new self('Test Valley', 'E07000093');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tewkesbury(): self
    {
        return new self('Tewkesbury', 'E07000083');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function thanet(): self
    {
        return new self('Thanet', 'E07000114');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function threeRivers(): self
    {
        return new self('Three Rivers', 'E07000102');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function thurrock(): self
    {
        return new self('Thurrock', 'E06000034');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tonbridgeAndMalling(): self
    {
        return new self('Tonbridge and Malling', 'E07000115');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function torbay(): self
    {
        return new self('Torbay', 'E06000027');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function torfaen(): self
    {
        return new self('Torfaen', 'W06000020');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function torridge(): self
    {
        return new self('Torridge', 'E07000046');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function towerHamlets(): self
    {
        return new self('Tower Hamlets', 'E09000030');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function trafford(): self
    {
        return new self('Trafford', 'E08000009');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tunbridgeWells(): self
    {
        return new self('Tunbridge Wells', 'E07000116');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function uttlesford(): self
    {
        return new self('Uttlesford', 'E07000077');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function valeOfGlamorgan(): self
    {
        return new self('Vale of Glamorgan', 'W06000014');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function valeOfWhiteHorse(): self
    {
        return new self('Vale of White Horse', 'E07000180');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wakefield(): self
    {
        return new self('Wakefield', 'E08000036');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function walsall(): self
    {
        return new self('Walsall', 'E08000030');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function walthamForest(): self
    {
        return new self('Waltham Forest', 'E09000031');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wandsworth(): self
    {
        return new self('Wandsworth', 'E09000032');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function warrington(): self
    {
        return new self('Warrington', 'E06000007');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function warwick(): self
    {
        return new self('Warwick', 'E07000222');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function watford(): self
    {
        return new self('Watford', 'E07000103');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function waverley(): self
    {
        return new self('Waverley', 'E07000216');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wealden(): self
    {
        return new self('Wealden', 'E07000065');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wellingborough(): self
    {
        return new self('Wellingborough', 'E07000156');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function welwynHatfield(): self
    {
        return new self('Welwyn Hatfield', 'E07000241');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westBerkshire(): self
    {
        return new self('West Berkshire', 'E06000037');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westDevon(): self
    {
        return new self('West Devon', 'E07000047');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westDunbartonshire(): self
    {
        return new self('West Dunbartonshire', 'S12000039');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westLancashire(): self
    {
        return new self('West Lancashire', 'E07000127');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westLindsey(): self
    {
        return new self('West Lindsey', 'E07000142');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westLothian(): self
    {
        return new self('West Lothian', 'S12000040');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westOxfordshire(): self
    {
        return new self('West Oxfordshire', 'E07000181');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westSuffolk(): self
    {
        return new self('West Suffolk', 'E07000245');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westminster(): self
    {
        return new self('Westminster', 'E09000033');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wigan(): self
    {
        return new self('Wigan', 'E08000010');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wiltshire(): self
    {
        return new self('Wiltshire', 'E06000054');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function winchester(): self
    {
        return new self('Winchester', 'E07000094');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function windsorAndMaidenhead(): self
    {
        return new self('Windsor and Maidenhead', 'E06000040');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wirral(): self
    {
        return new self('Wirral', 'E08000015');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function woking(): self
    {
        return new self('Woking', 'E07000217');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wokingham(): self
    {
        return new self('Wokingham', 'E06000041');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wolverhampton(): self
    {
        return new self('Wolverhampton', 'E08000031');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function worcester(): self
    {
        return new self('Worcester', 'E07000237');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function worthing(): self
    {
        return new self('Worthing', 'E07000229');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wrexham(): self
    {
        return new self('Wrexham', 'W06000006');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wychavon(): self
    {
        return new self('Wychavon', 'E07000238');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wycombe(): self
    {
        return new self('Wycombe', 'E07000007');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wyre(): self
    {
        return new self('Wyre', 'E07000128');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wyreForest(): self
    {
        return new self('Wyre Forest', 'E07000239');
    }

    /**
     * @return \PHECovid\Model\Ltla
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
