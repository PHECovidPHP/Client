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
final class Utla
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
     * @return \PHECovid\Model\Utla
     */
    public static function aberdeenCity(): self
    {
        return new self('Aberdeen City');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function aberdeenshire(): self
    {
        return new self('Aberdeenshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function angus(): self
    {
        return new self('Angus');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function antrimAndNewtownabbey(): self
    {
        return new self('Antrim and Newtownabbey');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function ardsAndNorthDown(): self
    {
        return new self('Ards and North Down');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function argyllAndBute(): self
    {
        return new self('Argyll and Bute');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function armaghCityBanbridgeAndCraigavon(): self
    {
        return new self('Armagh City, Banbridge and Craigavon');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function barkingAndDagenham(): self
    {
        return new self('Barking and Dagenham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function barnet(): self
    {
        return new self('Barnet');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function barnsley(): self
    {
        return new self('Barnsley');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bathAndNorthEastSomerset(): self
    {
        return new self('Bath and North East Somerset');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bedford(): self
    {
        return new self('Bedford');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function belfast(): self
    {
        return new self('Belfast');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bexley(): self
    {
        return new self('Bexley');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function birmingham(): self
    {
        return new self('Birmingham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function blackburnWithDarwen(): self
    {
        return new self('Blackburn with Darwen');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function blackpool(): self
    {
        return new self('Blackpool');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function blaenauGwent(): self
    {
        return new self('Blaenau Gwent');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bolton(): self
    {
        return new self('Bolton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bournemouthChristchurchAndPoole(): self
    {
        return new self('Bournemouth, Christchurch and Poole');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bracknellForest(): self
    {
        return new self('Bracknell Forest');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bradford(): self
    {
        return new self('Bradford');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function brent(): self
    {
        return new self('Brent');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bridgend(): self
    {
        return new self('Bridgend');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function brightonAndHove(): self
    {
        return new self('Brighton and Hove');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bristolCityOf(): self
    {
        return new self('Bristol, City of');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bromley(): self
    {
        return new self('Bromley');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function buckinghamshire(): self
    {
        return new self('Buckinghamshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function bury(): self
    {
        return new self('Bury');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function caerphilly(): self
    {
        return new self('Caerphilly');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function calderdale(): self
    {
        return new self('Calderdale');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cambridgeshire(): self
    {
        return new self('Cambridgeshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function camden(): self
    {
        return new self('Camden');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cardiff(): self
    {
        return new self('Cardiff');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function carmarthenshire(): self
    {
        return new self('Carmarthenshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function causewayCoastAndGlens(): self
    {
        return new self('Causeway Coast and Glens');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function centralBedfordshire(): self
    {
        return new self('Central Bedfordshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function ceredigion(): self
    {
        return new self('Ceredigion');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cheshireEast(): self
    {
        return new self('Cheshire East');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cheshireWestAndChester(): self
    {
        return new self('Cheshire West and Chester');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cityOfEdinburgh(): self
    {
        return new self('City of Edinburgh');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function clackmannanshire(): self
    {
        return new self('Clackmannanshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function conwy(): self
    {
        return new self('Conwy');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cornwallAndIslesOfScilly(): self
    {
        return new self('Cornwall and Isles of Scilly');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function countyDurham(): self
    {
        return new self('County Durham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function coventry(): self
    {
        return new self('Coventry');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function croydon(): self
    {
        return new self('Croydon');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function cumbria(): self
    {
        return new self('Cumbria');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function darlington(): self
    {
        return new self('Darlington');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function denbighshire(): self
    {
        return new self('Denbighshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function derby(): self
    {
        return new self('Derby');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function derbyshire(): self
    {
        return new self('Derbyshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function derryCityAndStrabane(): self
    {
        return new self('Derry City and Strabane');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function devon(): self
    {
        return new self('Devon');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function doncaster(): self
    {
        return new self('Doncaster');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function dorset(): self
    {
        return new self('Dorset');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function dudley(): self
    {
        return new self('Dudley');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function dumfriesAndGalloway(): self
    {
        return new self('Dumfries and Galloway');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function dundeeCity(): self
    {
        return new self('Dundee City');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function ealing(): self
    {
        return new self('Ealing');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function eastAyrshire(): self
    {
        return new self('East Ayrshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function eastDunbartonshire(): self
    {
        return new self('East Dunbartonshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function eastLothian(): self
    {
        return new self('East Lothian');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function eastRenfrewshire(): self
    {
        return new self('East Renfrewshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function eastRidingOfYorkshire(): self
    {
        return new self('East Riding of Yorkshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function eastSussex(): self
    {
        return new self('East Sussex');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function enfield(): self
    {
        return new self('Enfield');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function essex(): self
    {
        return new self('Essex');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function falkirk(): self
    {
        return new self('Falkirk');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function fermanaghAndOmagh(): self
    {
        return new self('Fermanagh and Omagh');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function fife(): self
    {
        return new self('Fife');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function flintshire(): self
    {
        return new self('Flintshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function gateshead(): self
    {
        return new self('Gateshead');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function glasgowCity(): self
    {
        return new self('Glasgow City');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function gloucestershire(): self
    {
        return new self('Gloucestershire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function greenwich(): self
    {
        return new self('Greenwich');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function gwynedd(): self
    {
        return new self('Gwynedd');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hackneyAndCityOfLondon(): self
    {
        return new self('Hackney and City of London');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function halton(): self
    {
        return new self('Halton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hammersmithAndFulham(): self
    {
        return new self('Hammersmith and Fulham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hampshire(): self
    {
        return new self('Hampshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function haringey(): self
    {
        return new self('Haringey');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function harrow(): self
    {
        return new self('Harrow');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hartlepool(): self
    {
        return new self('Hartlepool');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function havering(): self
    {
        return new self('Havering');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function herefordshireCountyOf(): self
    {
        return new self('Herefordshire, County of');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hertfordshire(): self
    {
        return new self('Hertfordshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function highland(): self
    {
        return new self('Highland');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hillingdon(): self
    {
        return new self('Hillingdon');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function hounslow(): self
    {
        return new self('Hounslow');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function inverclyde(): self
    {
        return new self('Inverclyde');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function isleOfAnglesey(): self
    {
        return new self('Isle of Anglesey');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function isleOfWight(): self
    {
        return new self('Isle of Wight');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function islington(): self
    {
        return new self('Islington');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function kensingtonAndChelsea(): self
    {
        return new self('Kensington and Chelsea');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function kent(): self
    {
        return new self('Kent');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function kingstonUponHullCityOf(): self
    {
        return new self('Kingston upon Hull, City of');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function kingstonUponThames(): self
    {
        return new self('Kingston upon Thames');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function kirklees(): self
    {
        return new self('Kirklees');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function knowsley(): self
    {
        return new self('Knowsley');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function lambeth(): self
    {
        return new self('Lambeth');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function lancashire(): self
    {
        return new self('Lancashire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function leeds(): self
    {
        return new self('Leeds');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function leicester(): self
    {
        return new self('Leicester');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function leicestershire(): self
    {
        return new self('Leicestershire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function lewisham(): self
    {
        return new self('Lewisham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function lincolnshire(): self
    {
        return new self('Lincolnshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function lisburnAndCastlereagh(): self
    {
        return new self('Lisburn and Castlereagh');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function liverpool(): self
    {
        return new self('Liverpool');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function luton(): self
    {
        return new self('Luton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function manchester(): self
    {
        return new self('Manchester');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function medway(): self
    {
        return new self('Medway');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function merthyrTydfil(): self
    {
        return new self('Merthyr Tydfil');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function merton(): self
    {
        return new self('Merton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function midAndEastAntrim(): self
    {
        return new self('Mid and East Antrim');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function midUlster(): self
    {
        return new self('Mid Ulster');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function middlesbrough(): self
    {
        return new self('Middlesbrough');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function midlothian(): self
    {
        return new self('Midlothian');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function miltonKeynes(): self
    {
        return new self('Milton Keynes');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function monmouthshire(): self
    {
        return new self('Monmouthshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function moray(): self
    {
        return new self('Moray');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function naHEileananSiar(): self
    {
        return new self('Na h-Eileanan Siar');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function neathPortTalbot(): self
    {
        return new self('Neath Port Talbot');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function newcastleUponTyne(): self
    {
        return new self('Newcastle upon Tyne');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function newham(): self
    {
        return new self('Newham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function newport(): self
    {
        return new self('Newport');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function newryMourneAndDown(): self
    {
        return new self('Newry, Mourne and Down');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function norfolk(): self
    {
        return new self('Norfolk');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northAyrshire(): self
    {
        return new self('North Ayrshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northEastLincolnshire(): self
    {
        return new self('North East Lincolnshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northLanarkshire(): self
    {
        return new self('North Lanarkshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northLincolnshire(): self
    {
        return new self('North Lincolnshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northSomerset(): self
    {
        return new self('North Somerset');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northTyneside(): self
    {
        return new self('North Tyneside');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northYorkshire(): self
    {
        return new self('North Yorkshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northamptonshire(): self
    {
        return new self('Northamptonshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function northumberland(): self
    {
        return new self('Northumberland');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function nottingham(): self
    {
        return new self('Nottingham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function nottinghamshire(): self
    {
        return new self('Nottinghamshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function oldham(): self
    {
        return new self('Oldham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function orkneyIslands(): self
    {
        return new self('Orkney Islands');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function oxfordshire(): self
    {
        return new self('Oxfordshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function pembrokeshire(): self
    {
        return new self('Pembrokeshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function perthAndKinross(): self
    {
        return new self('Perth and Kinross');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function peterborough(): self
    {
        return new self('Peterborough');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function plymouth(): self
    {
        return new self('Plymouth');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function portsmouth(): self
    {
        return new self('Portsmouth');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function powys(): self
    {
        return new self('Powys');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function reading(): self
    {
        return new self('Reading');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function redbridge(): self
    {
        return new self('Redbridge');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function redcarAndCleveland(): self
    {
        return new self('Redcar and Cleveland');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function renfrewshire(): self
    {
        return new self('Renfrewshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function residentOutsideWales(): self
    {
        return new self('Resident outside Wales');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function rhonddaCynonTaf(): self
    {
        return new self('Rhondda Cynon Taf');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function richmondUponThames(): self
    {
        return new self('Richmond upon Thames');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function rochdale(): self
    {
        return new self('Rochdale');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function rotherham(): self
    {
        return new self('Rotherham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function rutland(): self
    {
        return new self('Rutland');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function salford(): self
    {
        return new self('Salford');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function sandwell(): self
    {
        return new self('Sandwell');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function scottishBorders(): self
    {
        return new self('Scottish Borders');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function sefton(): self
    {
        return new self('Sefton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function sheffield(): self
    {
        return new self('Sheffield');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function shetlandIslands(): self
    {
        return new self('Shetland Islands');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function shropshire(): self
    {
        return new self('Shropshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function slough(): self
    {
        return new self('Slough');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function solihull(): self
    {
        return new self('Solihull');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function somerset(): self
    {
        return new self('Somerset');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southAyrshire(): self
    {
        return new self('South Ayrshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southGloucestershire(): self
    {
        return new self('South Gloucestershire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southLanarkshire(): self
    {
        return new self('South Lanarkshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southTyneside(): self
    {
        return new self('South Tyneside');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southampton(): self
    {
        return new self('Southampton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southendOnSea(): self
    {
        return new self('Southend-on-Sea');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function southwark(): self
    {
        return new self('Southwark');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function stHelens(): self
    {
        return new self('St. Helens');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function staffordshire(): self
    {
        return new self('Staffordshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function stirling(): self
    {
        return new self('Stirling');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function stockport(): self
    {
        return new self('Stockport');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function stocktonOnTees(): self
    {
        return new self('Stockton-on-Tees');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function stokeOnTrent(): self
    {
        return new self('Stoke-on-Trent');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function suffolk(): self
    {
        return new self('Suffolk');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function sunderland(): self
    {
        return new self('Sunderland');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function surrey(): self
    {
        return new self('Surrey');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function sutton(): self
    {
        return new self('Sutton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function swansea(): self
    {
        return new self('Swansea');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function swindon(): self
    {
        return new self('Swindon');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function tameside(): self
    {
        return new self('Tameside');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function telfordAndWrekin(): self
    {
        return new self('Telford and Wrekin');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function thurrock(): self
    {
        return new self('Thurrock');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function torbay(): self
    {
        return new self('Torbay');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function torfaen(): self
    {
        return new self('Torfaen');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function towerHamlets(): self
    {
        return new self('Tower Hamlets');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function trafford(): self
    {
        return new self('Trafford');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function valeOfGlamorgan(): self
    {
        return new self('Vale of Glamorgan');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wakefield(): self
    {
        return new self('Wakefield');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function walsall(): self
    {
        return new self('Walsall');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function walthamForest(): self
    {
        return new self('Waltham Forest');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wandsworth(): self
    {
        return new self('Wandsworth');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function warrington(): self
    {
        return new self('Warrington');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function warwickshire(): self
    {
        return new self('Warwickshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function westBerkshire(): self
    {
        return new self('West Berkshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function westDunbartonshire(): self
    {
        return new self('West Dunbartonshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function westLothian(): self
    {
        return new self('West Lothian');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function westSussex(): self
    {
        return new self('West Sussex');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function westminster(): self
    {
        return new self('Westminster');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wigan(): self
    {
        return new self('Wigan');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wiltshire(): self
    {
        return new self('Wiltshire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function windsorAndMaidenhead(): self
    {
        return new self('Windsor and Maidenhead');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wirral(): self
    {
        return new self('Wirral');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wokingham(): self
    {
        return new self('Wokingham');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wolverhampton(): self
    {
        return new self('Wolverhampton');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function worcestershire(): self
    {
        return new self('Worcestershire');
    }

    /**
     * @return \PHECovid\Model\Utla
     */
    public static function wrexham(): self
    {
        return new self('Wrexham');
    }

    /**
     * @return \PHECovid\Model\Utla
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
