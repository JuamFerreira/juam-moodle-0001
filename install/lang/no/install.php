<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Adminmappe';
$string['availablelangs'] = 'Tilgjengelige språkpakker';
$string['chooselanguagehead'] = 'Velg et språk';
$string['chooselanguagesub'] = 'Velg språk (bare for INSTALLASJONEN). Du vil kunne velge språk for nettsted og bruker på et skjermbilde senere.';
$string['clialreadyconfigured'] = 'Filen config.php finnes allerede. Vennligst bruk admin/cli/install_database.php hvis du vil installere denne portalen.';
$string['clialreadyinstalled'] = 'Filen config.php eksisterer allerede. Vennligst bruk admin/cli/install_database.php hvis du vil oppgradere Moodle på denne portalen.';
$string['cliinstallheader'] = 'Moodle {$a} kommandolinje installasjonsprogram';
$string['databasehost'] = 'Databasevert';
$string['databasename'] = 'Databasenavn';
$string['databasetypehead'] = 'Velg databasedriver';
$string['dataroot'] = 'Dataområde';
$string['datarootpermission'] = 'Tillatelse for datakatalog';
$string['dbprefix'] = 'Tabellprefix';
$string['dirroot'] = 'Moodles filområde';
$string['environmenthead'] = 'Sjekker "omgivelsene" dine...';
$string['environmentsub2'] = 'Hver Moodle-utgivelse har minimumskrav til PHP versjon og et sett med obligatoriske PHP-tillegg. En full sjekk av omgivelser gjøres før hver installering og oppgradering. Vær vennlig å kontakte serveradministrator hvis du ikke vet hvordan du skal installere nye versjoner eller slå på PHP-tillegg.';
$string['errorsinenvironment'] = 'Omgivelseskontroll feilet!';
$string['installation'] = 'Installasjon';
$string['langdownloaderror'] = 'Beklageligvis ble ikke språkpakken "{$a}" installert. Installasjonsprosessen vil fortsette på Engelsk.';
$string['memorylimithelp'] = '<p>PHP minnegrensen for serveren din er nå satt til {$a}.</p>
<p>Dette kan skape minneproblemer for Moodle senere, spesielt hvis du har mange moduler tillatt og/eller mange brukere.</p>
<p>Vi anbefaler at du konfigurer PHP med en høyere grense enn mulig, for eksepmel 40M. Det er flere måter å gjøre dette på.:</p>
<ol>
<li>Hvis du har muligheten, rekompiler PHP med<i>--enable-memory-limit</i>.
Dette vil tillate Moodle å sette minnegrensen selv.</li>
<li>Hvis du har tilgang til php.ini fila di, kan du endre <b>memory_limit</b> innstillinga der til omtrent 40M. Hvis du ikke har tilgang kan du be administrator gjøre dette for deg.</li>
<li>På noen PHP-servere kan du lage en .htaccess fil i Moodlemappen som inneholder denne linjen:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Uansett, på noen servere kan dette forhindre <b>alle</b> PHP sider fra å virke (du vil se feilmeldinger når du ser på sider) og da må du fjerne .htaccess fila.</p></li>
</ol>';
$string['paths'] = 'Stier';
$string['pathserrcreatedataroot'] = 'Datakatalogen ({$a->dataroot}) kan ikke opprettes av installasjonsprogrammet.';
$string['pathshead'] = 'Bekreft stier';
$string['pathsrodataroot'] = 'Dataroot katalog er ikke skrivbar.';
$string['pathsroparentdataroot'] = 'Overordnet katalog ({$a->parent}) er ikke skrivbar. Datakatalogen ({$a->dataroot}) kan ikke opprettes av installasjonsprogrammet.';
$string['pathssubadmindir'] = 'Noen ganske få webhoteller bruker  /admin som en egen url for å få tilgang til et kontrollpanel. Dessverre kommer det i konflikt med standard lokalisering av Moodle sine admin-sider. Du kan fikse dette ved å endre navn på admin-mappen og deretter oppgi dette navnet her. F.eks. <em>moodleadmin</em>.  Dette vil fikse adminlenkene i Moodle.';
$string['pathssubdataroot'] = 'Du trenger et sted hvor Moodle kan lagre opplastede filer. Denne mappen må være med lese og skriverettigheter for webserver-brukeren (veldig ofte \'nobody\' eller \'apache\'), men denne mappen må IKKE være direkte tilgjengelig via web. Installasjonsprogrammet vil forsøke å opprette den om den ikke finnes fra før.';
$string['pathssubdirroot'] = '<p>Full mappesti til moodleinstallasjonen.</p>';
$string['pathssubwwwroot'] = '<p>Full webadresse til der hvor Moodle skal vises, altså den addressen som brukere skriver inn i adresselinjen i nettlseren sin.</p>
<p>Det er ikke mulig å bruke Moodle med mer enn en adresse. Dersom portalen din har flere webadresser bør du oppgi den enkleste av de her, og bruke videresending for  hver av de andre adressene.</p>
<p>Dersom portalen din er tilgjengelig både fra intranett og internett, skal du oppgi den offentlige internettadressen her og sette opp DNS slik at intranettbrukerne også benytter denne offisielle adressen.</p>
<p>Dersom adressen ikke er korrekt, vennligst endre URL i nettleseren slik at at installasjonen restartes med andre verdier.</p>';
$string['pathsunsecuredataroot'] = 'Dataroot plassering er ikke sikker';
$string['pathswrongadmindir'] = 'Adminkatalog finnes ikke';
$string['phpextension'] = '{$a} PHP etternavn';
$string['phpversion'] = 'PHP versjon';
$string['phpversionhelp'] = '<p>Moodle trenger en PHP versjon minst 4.3.0 eller 5.1.0 (5.0.x har rekke kjente problem).</p>
<Du kjører nå versjon {$a}</p>
<p>Du må oppgradere PHP eller flytte til en server med en nyere versjon av PHP!<br /> (I forhold til 5.0.x kan du også nedgradere til versjon 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Du ser denne siden fordi du nå har fullført installeringen og kjøringen av pakken <strong>{$a->packname} {$a->packversion}</strong> på datamaskinen din. Gratulerer!';
$string['welcomep30'] = 'Denne versjonen av <strong>{$a->installername}</strong> inneholder programmer for å lage et miljø som <strong>Moodle</strong> jobber i, nemlig:';
$string['welcomep40'] = 'Denne pakken inkluderer også  <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Bruken av alle applikasjoner i denne pakken er administrert av egne lisenser. Hele <strong>{$a->installername}</strong>-pakken er <a href="http://www.opensource.org/docs/definition_plain.html">
åpen kildekode</a> og er distribuert under  <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>-lisensen.';
$string['welcomep60'] = 'De følgende sidene vil vise deg gjennom noen enkle steg for å konfigurere og sette opp <strong>Moodle</strong> på datamaskinen din. Du kan godta standardinnstillingene, eller justere dem etter egne behov hvis du vil.';
$string['welcomep70'] = 'Klikk på "Neste" knappen under for å fortsette med <strong>Moodle</strong>-installasjonen';
$string['wwwroot'] = 'Web addresse';
