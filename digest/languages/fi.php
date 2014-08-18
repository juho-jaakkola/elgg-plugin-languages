<?php 

return array(
	'digest' => "Uutiskirje",
	
	// digest intervals
	'digest:interval:none' => "Ei koskaan",
	'digest:interval:default' => "Ryhmän oletusasetus (%s)",
	'digest:interval:daily' => "Kerran päivässä",
	'digest:interval:weekly' => "Kerran viikossa",
	'digest:interval:fortnightly' => "Kahden viikon välein",
	'digest:interval:monthly' => "Kerran kuussa",
	
	'digest:distribution' => "Ajankohta",
	'digest:distribution:distributed' => "Hajautettu",
	'digest:distribution:description' => "Valitse lähetysajankohta. Hajautettu lähetys generoi lähetysajan käyttäjäkohtaisesti, ja estää käyttäjiä määrittämästä ajankohtaa itse.",
	
	'digest:day:sunday' => "Sunnuntai",
	'digest:day:monday' => "Maanantai",
	'digest:day:tuesday' => "Tiistai",
	'digest:day:wednesday' => "Keskiviikko",
	'digest:day:thursday' => "Torstai",
	'digest:day:friday' => "Perjantai",
	'digest:day:saturday' => "Lauantai",
	
	'digest:interval:error' => "Virheellinen aikaväli",
	
	// readable time
	'digest:readable:time:mseconds' => "millisekuntia",
	'digest:readable:time:seconds' => "sekuntia",
	'digest:readable:time:minutes' => "minuuttia",
	'digest:readable:time:hours' => "tuntia",
	
	// menu items
	'digest:page_menu:settings' => "Uutiskirje",
	'digest:page_menu:theme_preview' => "Uutiskirjeen esikatselu",
	'digest:submenu:groupsettings' => "Uutiskirjeen asetukset",
	'admin:statistics:digest' => "Uutiskirjeen tilastot",
	
	// admin settings
	'digest:settings:notice' => "<b>VAROITUS:</b> Uutiskirje saattaa lähettää huomattavia määriä sähköpostia.",
	
	'digest:settings:production' => "Tuotannossa",
	'digest:settings:production:description' => "Uutiskirje saattaa lähettää huomattavia määriä sähköpostia. Tämän asetuksen avulla voit ottaa sen väliaikaisesti pois päältä esimerkiksi testaamisen ajaksi.",
	'digest:settings:production:option' => "Ota uutiskirje käyttöön",
	'digest:settings:production:group_option' => "Ota käyttöön ryhmien uutiskirje",
	
	'digest:settings:interval:title' => "Uutiskirjeen lähetysaikaväli",
	'digest:settings:interval:default' => "Oletusaikaväli",
	'digest:settings:interval:site_default' => "Uutiskirjeen oltusaikaväli",
	'digest:settings:interval:group_default' => "Ryhmien uutiskirjeen oletusaikaväli",
	'digest:settings:interval:description' => "Oletusaikaväliä käytetään, jos käyttäjä ei ole määrittänyt aikaväliä henkilökohtaisista asetuksistaan",
	
	'digest:settings:never:title' => "Passiiviset käyttäjät",
	'digest:settings:never:include' => "Lähetetäänkö uutiskirje käyttäjille, jotka eivät ole koskaan kirjautuneet sivustolle?",
	
	'digest:settings:custom_text:title' => "Räätälöity sisältö",
	'digest:settings:custom_text:description' => "Tämän avulla voit määrittää uutiskirjeille ylä- tai alatunnisteen.",
	'digest:settings:custom_text:site:header' => "Ylätunniste",
	'digest:settings:custom_text:site:footer' => "Alatunniste",
	'digest:settings:custom_text:group:header' => "Ryhmien uutiskirjeen ylätunniste",
	'digest:settings:custom_text:group:footer' => "Ryhmien uutiskirjeen alatunniste",
	
	'digest:settings:multi_core:title' => "Tuki usealle prosessoriytimelle",
	'digest:settings:multi_core:description' => "Suurilla sivustoilla (yli 5000 käyttäjää) on kannattavaa jakaa viestien lähetys usealle prosessoriytimelle. Älä syötä todellista suurempaa arvoa, sillä tämä vain hidastaa uutiskirjeiden lähettämistä.",
	'digest:settings:multi_core:warning' => "Älä muuta tätä asetusta, jos et tiedä mitä useiden ytimien käyttö tarkoittaa, tai sivustollasi on alle 5000 käyttäjää.",
	'digest:settings:multi_core:number' => "Valitse käytettävien prosessoriytimien määrä",
	
	'digest:settings:stats:title' => "Tilastojen asetukset",
	'digest:settings:stats:reset' => "Nollaa kaikki tilastot",
	
	// usersettings
	'digest:usersettings:title' => "Uutiskirjeen asetukset",
	'digest:usersettings:error:user' => "You don't have access to this users digest settings",
	'digest:usersettings:no_settings' => "No digest settings available to configure.",
	
	'digest:usersettings:site:title' => "Uutiskirje",
	'digest:usersettings:site:description' => "Sivustonlaajuinen uutiskirje kertoo sivuston viimeisimmistä tapahtumista kuten uusista blogeista, ryhmistä ja käyttäjistä.",
	'digest:usersettings:site:setting' => "Kuinka usein haluat vastaanottaa uutiskirjeen",
	
	'digest:usersettings:groups:title' => "Ryhmien uutiskirjeet",
	'digest:usersettings:groups:description' => "Ryhmän uutiskirje kertoo yksittäisen ryhmän viimeisimmät tapahtumat, joita voivat olla esimerkiksi uusi jäsen tai uusi ryhmäkeskustelu.",
	'digest:usersettings:groups:group_header' => "Ryhmä",
	'digest:usersettings:groups:setting_header' => "Aikaväli",
	
	// group settings
	'digest:groupsettings:title' => "Group digest setting",
	'digest:groupsettings:description' => "At what interval do you which your members to receive a digest of the group activity. This setting will be used as a default value, your members can personaly overrule this setting.",
	'digest:groupsettings:setting' => "Group digest interval",
	
	// layout
	'digest:elements:unsubscribe:info' => "Sait tämän sähköpostin, koska olet tilannut uutiskirjeen sivustolta %s.",
	'digest:elements:unsubscribe:settings' => "Voit muuttaa uutiskirjeen asetuksia %stäällä%s.",
	'digest:elements:unsubscribe:unsubscribe' => "Voit perua uutiskirjeen kokonaan klikkaamalla %stästä%s.",

	// show a digest online
	'digest:show:error:input' => "Incorrect input to view the digest",
	'digest:show:no_data' => "No data was found for the selected interval",

	// message body
	'digest:message:title:site' => "%s: %s lähetettävä uutiskirje",
	'digest:message:title:group' => "%s - %s: %s digest",

	'digest:elements:online' => "If you can't read the mail, view this digest %sonline%s",
	
	// admin stats
	'digest:admin:stats:site:title' => "Site digest statistics",
	'digest:admin:stats:site:not_enabled' => "Site digest is not enabled in the plugin settings",
	'digest:admin:stats:general:server_name' => "Server that handled the digest",
	'digest:admin:stats:general:ts_start_cron' => "Time the CRON started",
	'digest:admin:stats:general:mts_start_digest' => "Time it took before the digest started",
	'digest:admin:stats:general:peak_memory_start' => "Peak memory before the digest started",
	'digest:admin:stats:general:peak_memory_end' => "Peak memory after the digest finished",
	'digest:admin:stats:general:mts_end_digest' => "Time it took to process the digest",

	'digest:admin:stats:site:general:mts_user_selection_done' => "Time it took to select all the users",
	'digest:admin:stats:total_time' => "Total run time",
	'digest:admin:stats:total_memory' => "Total memory leaked",
	'digest:admin:stats:not_collected' => "No statistics have been collected yet",
	
	'digest:admin:stats:groups' => "Groups processed",
	'digest:admin:stats:users' => "Users processed",
	'digest:admin:stats:mails' => "Mails sent",
	'digest:admin:stats:distribution:fortnightly' => "Odd weeks on %s",
	'digest:admin:stats:distribution:monthly' => "%s of the month",
	
	'digest:admin:stats:group:title' => "Group digest statistics",
	'digest:admin:stats:group:not_enabled' => "Group digest is not enabled in the plugin settings",
	'digest:admin:stats:group:general:mts_group_selection_done' => "Time it took to select all groups",
	'digest:admin:stats:group:general:total_time_user_selection' => "Total time spend on user selection",
	
	// register 
	'digest:register:enable' => "Haluan vastaanottaa sivuston uutiskirjeen",
	
	// unsubscribe
	'digest:unsubscribe:error:input' => "Pyyntö uutiskirjeen perumiseksi sisälsi virheellisiä tietoja",
	'digest:unsubscribe:error:code' => "Uutiskirjeen perumisessa tarvittava koodi oli virheellinen",
	'digest:unsubscribe:error:save' => "Uutiskirjeen perumisessa tapahtui tuntematon virhe",
	'digest:unsubscribe:success' => "Uutiskirjeen tilaus peruttu",
	
	// actions
	// update usersettings
	'digest:action:update:usersettings:error:unknown' => "Uutiskirjeen asetusten tallentamisessa tapahtui virhe",
	'digest:action:update:usersettings:success' => "Uutiskirjeen asetukset tallennettu",
	
	// update groupsettings
	'digest:action:update:groupsettings:error:save' => "Ryhmän uutiskirjeen asetusten tallentamisessa tapahtui virhe",
	'digest:action:update:groupsettings:success' => "Ryhmän uutiskirjeen asetukset tallennettu",
	
	// reset stats
	'digest:action:reset_stats:success' => "The stats have been reset",
	
	// send digest mail
	'digest:mail:plaintext:description' => "Your e-mail client needs to support HTML mails to view the digest.

You can also view the digest online using the following link: %s.",

	// command line script
	'digest:cli:error:secret' => "The provided secret is invalid, the digest can't run",
	
);
