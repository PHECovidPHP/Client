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
     * @param string $name
     *
     * @return void
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function aberdeenCity(): self
    {
        return new self('Aberdeen City');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function aberdeenshire(): self
    {
        return new self('Aberdeenshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function adur(): self
    {
        return new self('Adur');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function allerdale(): self
    {
        return new self('Allerdale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function amberValley(): self
    {
        return new self('Amber Valley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function angus(): self
    {
        return new self('Angus');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function antrimAndNewtownabbey(): self
    {
        return new self('Antrim and Newtownabbey');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ardsAndNorthDown(): self
    {
        return new self('Ards and North Down');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function argyllAndBute(): self
    {
        return new self('Argyll and Bute');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function armaghCityBanbridgeAndCraigavon(): self
    {
        return new self('Armagh City, Banbridge and Craigavon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function arun(): self
    {
        return new self('Arun');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ashfield(): self
    {
        return new self('Ashfield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ashford(): self
    {
        return new self('Ashford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function aylesburyVale(): self
    {
        return new self('Aylesbury Vale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function babergh(): self
    {
        return new self('Babergh');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barkingAndDagenham(): self
    {
        return new self('Barking and Dagenham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barnet(): self
    {
        return new self('Barnet');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barnsley(): self
    {
        return new self('Barnsley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function barrowInFurness(): self
    {
        return new self('Barrow-in-Furness');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function basildon(): self
    {
        return new self('Basildon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function basingstokeAndDeane(): self
    {
        return new self('Basingstoke and Deane');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bassetlaw(): self
    {
        return new self('Bassetlaw');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bathAndNorthEastSomerset(): self
    {
        return new self('Bath and North East Somerset');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bedford(): self
    {
        return new self('Bedford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function belfast(): self
    {
        return new self('Belfast');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bexley(): self
    {
        return new self('Bexley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function birmingham(): self
    {
        return new self('Birmingham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blaby(): self
    {
        return new self('Blaby');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blackburnWithDarwen(): self
    {
        return new self('Blackburn with Darwen');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blackpool(): self
    {
        return new self('Blackpool');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function blaenauGwent(): self
    {
        return new self('Blaenau Gwent');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bolsover(): self
    {
        return new self('Bolsover');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bolton(): self
    {
        return new self('Bolton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function boston(): self
    {
        return new self('Boston');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bournemouthChristchurchAndPoole(): self
    {
        return new self('Bournemouth, Christchurch and Poole');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bracknellForest(): self
    {
        return new self('Bracknell Forest');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bradford(): self
    {
        return new self('Bradford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function braintree(): self
    {
        return new self('Braintree');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function breckland(): self
    {
        return new self('Breckland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function brent(): self
    {
        return new self('Brent');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function brentwood(): self
    {
        return new self('Brentwood');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bridgend(): self
    {
        return new self('Bridgend');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function brightonAndHove(): self
    {
        return new self('Brighton and Hove');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bristolCityOf(): self
    {
        return new self('Bristol, City of');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function broadland(): self
    {
        return new self('Broadland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bromley(): self
    {
        return new self('Bromley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bromsgrove(): self
    {
        return new self('Bromsgrove');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function broxbourne(): self
    {
        return new self('Broxbourne');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function broxtowe(): self
    {
        return new self('Broxtowe');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function burnley(): self
    {
        return new self('Burnley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function bury(): self
    {
        return new self('Bury');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function caerphilly(): self
    {
        return new self('Caerphilly');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function calderdale(): self
    {
        return new self('Calderdale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cambridge(): self
    {
        return new self('Cambridge');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function camden(): self
    {
        return new self('Camden');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cannockChase(): self
    {
        return new self('Cannock Chase');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function canterbury(): self
    {
        return new self('Canterbury');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cardiff(): self
    {
        return new self('Cardiff');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function carlisle(): self
    {
        return new self('Carlisle');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function carmarthenshire(): self
    {
        return new self('Carmarthenshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function castlePoint(): self
    {
        return new self('Castle Point');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function causewayCoastAndGlens(): self
    {
        return new self('Causeway Coast and Glens');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function centralBedfordshire(): self
    {
        return new self('Central Bedfordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ceredigion(): self
    {
        return new self('Ceredigion');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function charnwood(): self
    {
        return new self('Charnwood');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chelmsford(): self
    {
        return new self('Chelmsford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cheltenham(): self
    {
        return new self('Cheltenham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cherwell(): self
    {
        return new self('Cherwell');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cheshireEast(): self
    {
        return new self('Cheshire East');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cheshireWestAndChester(): self
    {
        return new self('Cheshire West and Chester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chesterfield(): self
    {
        return new self('Chesterfield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chichester(): self
    {
        return new self('Chichester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chiltern(): self
    {
        return new self('Chiltern');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function chorley(): self
    {
        return new self('Chorley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cityOfEdinburgh(): self
    {
        return new self('City of Edinburgh');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function clackmannanshire(): self
    {
        return new self('Clackmannanshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function colchester(): self
    {
        return new self('Colchester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function comhairleNanEileanSiar(): self
    {
        return new self('Comhairle nan Eilean Siar');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function conwy(): self
    {
        return new self('Conwy');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function copeland(): self
    {
        return new self('Copeland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function corby(): self
    {
        return new self('Corby');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cornwallAndIslesOfScilly(): self
    {
        return new self('Cornwall and Isles of Scilly');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function cotswold(): self
    {
        return new self('Cotswold');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function countyDurham(): self
    {
        return new self('County Durham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function coventry(): self
    {
        return new self('Coventry');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function craven(): self
    {
        return new self('Craven');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function crawley(): self
    {
        return new self('Crawley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function croydon(): self
    {
        return new self('Croydon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dacorum(): self
    {
        return new self('Dacorum');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function darlington(): self
    {
        return new self('Darlington');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dartford(): self
    {
        return new self('Dartford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function daventry(): self
    {
        return new self('Daventry');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function denbighshire(): self
    {
        return new self('Denbighshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function derby(): self
    {
        return new self('Derby');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function derbyshireDales(): self
    {
        return new self('Derbyshire Dales');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function derryCityAndStrabane(): self
    {
        return new self('Derry City and Strabane');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function doncaster(): self
    {
        return new self('Doncaster');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dorset(): self
    {
        return new self('Dorset');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dover(): self
    {
        return new self('Dover');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dudley(): self
    {
        return new self('Dudley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dumfriesAndGalloway(): self
    {
        return new self('Dumfries and Galloway');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function dundeeCity(): self
    {
        return new self('Dundee City');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ealing(): self
    {
        return new self('Ealing');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastAyrshire(): self
    {
        return new self('East Ayrshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastCambridgeshire(): self
    {
        return new self('East Cambridgeshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastDevon(): self
    {
        return new self('East Devon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastDunbartonshire(): self
    {
        return new self('East Dunbartonshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastHampshire(): self
    {
        return new self('East Hampshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastHertfordshire(): self
    {
        return new self('East Hertfordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastLindsey(): self
    {
        return new self('East Lindsey');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastLothian(): self
    {
        return new self('East Lothian');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastNorthamptonshire(): self
    {
        return new self('East Northamptonshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastRenfrewshire(): self
    {
        return new self('East Renfrewshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastRidingOfYorkshire(): self
    {
        return new self('East Riding of Yorkshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastStaffordshire(): self
    {
        return new self('East Staffordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastSuffolk(): self
    {
        return new self('East Suffolk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastbourne(): self
    {
        return new self('Eastbourne');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eastleigh(): self
    {
        return new self('Eastleigh');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eden(): self
    {
        return new self('Eden');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function elmbridge(): self
    {
        return new self('Elmbridge');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function enfield(): self
    {
        return new self('Enfield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function eppingForest(): self
    {
        return new self('Epping Forest');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function epsomAndEwell(): self
    {
        return new self('Epsom and Ewell');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function erewash(): self
    {
        return new self('Erewash');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function exeter(): self
    {
        return new self('Exeter');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function falkirk(): self
    {
        return new self('Falkirk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fareham(): self
    {
        return new self('Fareham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fenland(): self
    {
        return new self('Fenland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fermanaghAndOmagh(): self
    {
        return new self('Fermanagh and Omagh');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fife(): self
    {
        return new self('Fife');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function flintshire(): self
    {
        return new self('Flintshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function folkestoneAndHythe(): self
    {
        return new self('Folkestone and Hythe');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function forestOfDean(): self
    {
        return new self('Forest of Dean');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function fylde(): self
    {
        return new self('Fylde');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gateshead(): self
    {
        return new self('Gateshead');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gedling(): self
    {
        return new self('Gedling');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function glasgowCity(): self
    {
        return new self('Glasgow City');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gloucester(): self
    {
        return new self('Gloucester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gosport(): self
    {
        return new self('Gosport');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gravesham(): self
    {
        return new self('Gravesham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function greatYarmouth(): self
    {
        return new self('Great Yarmouth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function greenwich(): self
    {
        return new self('Greenwich');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function guildford(): self
    {
        return new self('Guildford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function gwynedd(): self
    {
        return new self('Gwynedd');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hackneyAndCityOfLondon(): self
    {
        return new self('Hackney and City of London');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function halton(): self
    {
        return new self('Halton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hambleton(): self
    {
        return new self('Hambleton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hammersmithAndFulham(): self
    {
        return new self('Hammersmith and Fulham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harborough(): self
    {
        return new self('Harborough');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function haringey(): self
    {
        return new self('Haringey');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harlow(): self
    {
        return new self('Harlow');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harrogate(): self
    {
        return new self('Harrogate');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function harrow(): self
    {
        return new self('Harrow');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hart(): self
    {
        return new self('Hart');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hartlepool(): self
    {
        return new self('Hartlepool');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hastings(): self
    {
        return new self('Hastings');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function havant(): self
    {
        return new self('Havant');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function havering(): self
    {
        return new self('Havering');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function herefordshireCountyOf(): self
    {
        return new self('Herefordshire, County of');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hertsmere(): self
    {
        return new self('Hertsmere');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function highPeak(): self
    {
        return new self('High Peak');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function highland(): self
    {
        return new self('Highland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hillingdon(): self
    {
        return new self('Hillingdon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hinckleyAndBosworth(): self
    {
        return new self('Hinckley and Bosworth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function horsham(): self
    {
        return new self('Horsham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hounslow(): self
    {
        return new self('Hounslow');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function huntingdonshire(): self
    {
        return new self('Huntingdonshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function hyndburn(): self
    {
        return new self('Hyndburn');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function inverclyde(): self
    {
        return new self('Inverclyde');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ipswich(): self
    {
        return new self('Ipswich');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function isleOfAnglesey(): self
    {
        return new self('Isle of Anglesey');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function isleOfWight(): self
    {
        return new self('Isle of Wight');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function islington(): self
    {
        return new self('Islington');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kensingtonAndChelsea(): self
    {
        return new self('Kensington and Chelsea');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kettering(): self
    {
        return new self('Kettering');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kingsLynnAndWestNorfolk(): self
    {
        return new self('King\'s Lynn and West Norfolk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kingstonUponHullCityOf(): self
    {
        return new self('Kingston upon Hull, City of');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kingstonUponThames(): self
    {
        return new self('Kingston upon Thames');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function kirklees(): self
    {
        return new self('Kirklees');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function knowsley(): self
    {
        return new self('Knowsley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lambeth(): self
    {
        return new self('Lambeth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lancaster(): self
    {
        return new self('Lancaster');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function leeds(): self
    {
        return new self('Leeds');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function leicester(): self
    {
        return new self('Leicester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lewes(): self
    {
        return new self('Lewes');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lewisham(): self
    {
        return new self('Lewisham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lichfield(): self
    {
        return new self('Lichfield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lincoln(): self
    {
        return new self('Lincoln');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function lisburnAndCastlereagh(): self
    {
        return new self('Lisburn and Castlereagh');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function liverpool(): self
    {
        return new self('Liverpool');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function luton(): self
    {
        return new self('Luton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function maidstone(): self
    {
        return new self('Maidstone');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function maldon(): self
    {
        return new self('Maldon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function malvernHills(): self
    {
        return new self('Malvern Hills');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function manchester(): self
    {
        return new self('Manchester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function mansfield(): self
    {
        return new self('Mansfield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function medway(): self
    {
        return new self('Medway');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function melton(): self
    {
        return new self('Melton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function mendip(): self
    {
        return new self('Mendip');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function merthyrTydfil(): self
    {
        return new self('Merthyr Tydfil');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function merton(): self
    {
        return new self('Merton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midAndEastAntrim(): self
    {
        return new self('Mid and East Antrim');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midDevon(): self
    {
        return new self('Mid Devon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midSuffolk(): self
    {
        return new self('Mid Suffolk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midSussex(): self
    {
        return new self('Mid Sussex');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midUlster(): self
    {
        return new self('Mid Ulster');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function middlesbrough(): self
    {
        return new self('Middlesbrough');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function midlothian(): self
    {
        return new self('Midlothian');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function miltonKeynes(): self
    {
        return new self('Milton Keynes');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function moleValley(): self
    {
        return new self('Mole Valley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function monmouthshire(): self
    {
        return new self('Monmouthshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function moray(): self
    {
        return new self('Moray');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function neathPortTalbot(): self
    {
        return new self('Neath Port Talbot');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newForest(): self
    {
        return new self('New Forest');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newarkAndSherwood(): self
    {
        return new self('Newark and Sherwood');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newcastleUponTyne(): self
    {
        return new self('Newcastle upon Tyne');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newcastleUnderLyme(): self
    {
        return new self('Newcastle-under-Lyme');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newham(): self
    {
        return new self('Newham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newport(): self
    {
        return new self('Newport');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function newryMourneAndDown(): self
    {
        return new self('Newry, Mourne and Down');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northAyrshire(): self
    {
        return new self('North Ayrshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northDevon(): self
    {
        return new self('North Devon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northEastDerbyshire(): self
    {
        return new self('North East Derbyshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northEastLincolnshire(): self
    {
        return new self('North East Lincolnshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northHertfordshire(): self
    {
        return new self('North Hertfordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northKesteven(): self
    {
        return new self('North Kesteven');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northLanarkshire(): self
    {
        return new self('North Lanarkshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northLincolnshire(): self
    {
        return new self('North Lincolnshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northNorfolk(): self
    {
        return new self('North Norfolk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northSomerset(): self
    {
        return new self('North Somerset');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northTyneside(): self
    {
        return new self('North Tyneside');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northWarwickshire(): self
    {
        return new self('North Warwickshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northWestLeicestershire(): self
    {
        return new self('North West Leicestershire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northampton(): self
    {
        return new self('Northampton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function northumberland(): self
    {
        return new self('Northumberland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function norwich(): self
    {
        return new self('Norwich');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function nottingham(): self
    {
        return new self('Nottingham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function nuneatonAndBedworth(): self
    {
        return new self('Nuneaton and Bedworth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function oadbyAndWigston(): self
    {
        return new self('Oadby and Wigston');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function oldham(): self
    {
        return new self('Oldham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function orkneyIslands(): self
    {
        return new self('Orkney Islands');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function oxford(): self
    {
        return new self('Oxford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function pembrokeshire(): self
    {
        return new self('Pembrokeshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function pendle(): self
    {
        return new self('Pendle');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function perthAndKinross(): self
    {
        return new self('Perth and Kinross');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function peterborough(): self
    {
        return new self('Peterborough');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function plymouth(): self
    {
        return new self('Plymouth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function portsmouth(): self
    {
        return new self('Portsmouth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function powys(): self
    {
        return new self('Powys');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function preston(): self
    {
        return new self('Preston');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function reading(): self
    {
        return new self('Reading');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function redbridge(): self
    {
        return new self('Redbridge');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function redcarAndCleveland(): self
    {
        return new self('Redcar and Cleveland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function redditch(): self
    {
        return new self('Redditch');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function reigateAndBanstead(): self
    {
        return new self('Reigate and Banstead');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function renfrewshire(): self
    {
        return new self('Renfrewshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function residentOutsideWales(): self
    {
        return new self('Resident outside Wales');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rhonddaCynonTaf(): self
    {
        return new self('Rhondda Cynon Taf');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ribbleValley(): self
    {
        return new self('Ribble Valley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function richmondUponThames(): self
    {
        return new self('Richmond upon Thames');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function richmondshire(): self
    {
        return new self('Richmondshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rochdale(): self
    {
        return new self('Rochdale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rochford(): self
    {
        return new self('Rochford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rossendale(): self
    {
        return new self('Rossendale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rother(): self
    {
        return new self('Rother');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rotherham(): self
    {
        return new self('Rotherham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rugby(): self
    {
        return new self('Rugby');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function runnymede(): self
    {
        return new self('Runnymede');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rushcliffe(): self
    {
        return new self('Rushcliffe');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rushmoor(): self
    {
        return new self('Rushmoor');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function rutland(): self
    {
        return new self('Rutland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function ryedale(): self
    {
        return new self('Ryedale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function salford(): self
    {
        return new self('Salford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sandwell(): self
    {
        return new self('Sandwell');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function scarborough(): self
    {
        return new self('Scarborough');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function scottishBorders(): self
    {
        return new self('Scottish Borders');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sedgemoor(): self
    {
        return new self('Sedgemoor');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sefton(): self
    {
        return new self('Sefton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function selby(): self
    {
        return new self('Selby');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sevenoaks(): self
    {
        return new self('Sevenoaks');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sheffield(): self
    {
        return new self('Sheffield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function shetlandIslands(): self
    {
        return new self('Shetland Islands');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function shropshire(): self
    {
        return new self('Shropshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function slough(): self
    {
        return new self('Slough');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function solihull(): self
    {
        return new self('Solihull');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function somersetWestAndTaunton(): self
    {
        return new self('Somerset West and Taunton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southAyrshire(): self
    {
        return new self('South Ayrshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southBucks(): self
    {
        return new self('South Bucks');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southCambridgeshire(): self
    {
        return new self('South Cambridgeshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southDerbyshire(): self
    {
        return new self('South Derbyshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southGloucestershire(): self
    {
        return new self('South Gloucestershire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southHams(): self
    {
        return new self('South Hams');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southHolland(): self
    {
        return new self('South Holland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southKesteven(): self
    {
        return new self('South Kesteven');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southLakeland(): self
    {
        return new self('South Lakeland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southLanarkshire(): self
    {
        return new self('South Lanarkshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southNorfolk(): self
    {
        return new self('South Norfolk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southNorthamptonshire(): self
    {
        return new self('South Northamptonshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southOxfordshire(): self
    {
        return new self('South Oxfordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southRibble(): self
    {
        return new self('South Ribble');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southSomerset(): self
    {
        return new self('South Somerset');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southStaffordshire(): self
    {
        return new self('South Staffordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southTyneside(): self
    {
        return new self('South Tyneside');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southampton(): self
    {
        return new self('Southampton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southendOnSea(): self
    {
        return new self('Southend-on-Sea');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function southwark(): self
    {
        return new self('Southwark');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function spelthorne(): self
    {
        return new self('Spelthorne');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stAlbans(): self
    {
        return new self('St Albans');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stHelens(): self
    {
        return new self('St. Helens');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stafford(): self
    {
        return new self('Stafford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function staffordshireMoorlands(): self
    {
        return new self('Staffordshire Moorlands');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stevenage(): self
    {
        return new self('Stevenage');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stirling(): self
    {
        return new self('Stirling');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stockport(): self
    {
        return new self('Stockport');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stocktonOnTees(): self
    {
        return new self('Stockton-on-Tees');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stokeOnTrent(): self
    {
        return new self('Stoke-on-Trent');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stratfordOnAvon(): self
    {
        return new self('Stratford-on-Avon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function stroud(): self
    {
        return new self('Stroud');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sunderland(): self
    {
        return new self('Sunderland');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function surreyHeath(): self
    {
        return new self('Surrey Heath');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function sutton(): self
    {
        return new self('Sutton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function swale(): self
    {
        return new self('Swale');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function swansea(): self
    {
        return new self('Swansea');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function swindon(): self
    {
        return new self('Swindon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tameside(): self
    {
        return new self('Tameside');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tamworth(): self
    {
        return new self('Tamworth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tandridge(): self
    {
        return new self('Tandridge');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function teignbridge(): self
    {
        return new self('Teignbridge');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function telfordAndWrekin(): self
    {
        return new self('Telford and Wrekin');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tendring(): self
    {
        return new self('Tendring');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function testValley(): self
    {
        return new self('Test Valley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tewkesbury(): self
    {
        return new self('Tewkesbury');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function thanet(): self
    {
        return new self('Thanet');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function threeRivers(): self
    {
        return new self('Three Rivers');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function thurrock(): self
    {
        return new self('Thurrock');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tonbridgeAndMalling(): self
    {
        return new self('Tonbridge and Malling');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function torbay(): self
    {
        return new self('Torbay');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function torfaen(): self
    {
        return new self('Torfaen');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function torridge(): self
    {
        return new self('Torridge');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function towerHamlets(): self
    {
        return new self('Tower Hamlets');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function trafford(): self
    {
        return new self('Trafford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function tunbridgeWells(): self
    {
        return new self('Tunbridge Wells');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function uttlesford(): self
    {
        return new self('Uttlesford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function valeOfGlamorgan(): self
    {
        return new self('Vale of Glamorgan');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function valeOfWhiteHorse(): self
    {
        return new self('Vale of White Horse');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wakefield(): self
    {
        return new self('Wakefield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function walsall(): self
    {
        return new self('Walsall');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function walthamForest(): self
    {
        return new self('Waltham Forest');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wandsworth(): self
    {
        return new self('Wandsworth');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function warrington(): self
    {
        return new self('Warrington');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function warwick(): self
    {
        return new self('Warwick');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function watford(): self
    {
        return new self('Watford');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function waverley(): self
    {
        return new self('Waverley');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wealden(): self
    {
        return new self('Wealden');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wellingborough(): self
    {
        return new self('Wellingborough');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function welwynHatfield(): self
    {
        return new self('Welwyn Hatfield');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westBerkshire(): self
    {
        return new self('West Berkshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westDevon(): self
    {
        return new self('West Devon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westDunbartonshire(): self
    {
        return new self('West Dunbartonshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westLancashire(): self
    {
        return new self('West Lancashire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westLindsey(): self
    {
        return new self('West Lindsey');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westLothian(): self
    {
        return new self('West Lothian');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westOxfordshire(): self
    {
        return new self('West Oxfordshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westSuffolk(): self
    {
        return new self('West Suffolk');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function westminster(): self
    {
        return new self('Westminster');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wigan(): self
    {
        return new self('Wigan');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wiltshire(): self
    {
        return new self('Wiltshire');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function winchester(): self
    {
        return new self('Winchester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function windsorAndMaidenhead(): self
    {
        return new self('Windsor and Maidenhead');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wirral(): self
    {
        return new self('Wirral');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function woking(): self
    {
        return new self('Woking');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wokingham(): self
    {
        return new self('Wokingham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wolverhampton(): self
    {
        return new self('Wolverhampton');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function worcester(): self
    {
        return new self('Worcester');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function worthing(): self
    {
        return new self('Worthing');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wrexham(): self
    {
        return new self('Wrexham');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wychavon(): self
    {
        return new self('Wychavon');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wycombe(): self
    {
        return new self('Wycombe');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wyre(): self
    {
        return new self('Wyre');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function wyreForest(): self
    {
        return new self('Wyre Forest');
    }

    /**
     * @return \PHECovid\Model\Ltla
     */
    public static function york(): self
    {
        return new self('York');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
