<?php

return array(
  'title' => 'Česky',
  'author' => 'Jan Červinka <cervinkah@gmail.com>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'Zrušit',
    'add' => 'Přidat',
    'save' => 'Uložit',
    'saved' => 'Uloženo!',
    'delete' => 'Smazat',
    'insert' => 'Vložit',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Zobrazit možnosti',
    'options.hide' => 'Skrýt možnosti',

    // installation
    'installation' => 'Instalace',
    'installation.check.headline' => 'Instalace Kirby Panelu',
    'installation.check.text' => 'Kirby během instalace narazilo na následující problémy…',
    'installation.check.retry' => 'Zkusit znovu',
    'installation.check.error' => 'Nastaly nějaké problémy!',
    'installation.check.error.accounts' => '/site/accounts není zapisovatelné',
    'installation.check.error.avatars' => '/assets/avatars není zapisovatelné',
    'installation.check.error.blueprints' => 'Prosím přidejte složku /site/blueprints',
    'installation.check.error.content' => 'Složka content a všechny soubory a složky v ní musí být zapisovatelné.',
    'installation.check.error.thumbs' => 'Složka thumbs musí být zapisovatelná.',
    'installation.signup.username.label' => 'Vytvořte svůj první účet',
    'installation.signup.username.placeholder' => 'Uživatelské jméno',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@example.com',
    'installation.signup.password.label' => 'Heslo',
    'installation.signup.language.label' => 'Jazky',
    'installation.signup.button' => 'Vytvořit účet',

    // login
    'login' => 'Přihlášení',
    'login.welcome' => 'Prosím přihlašte se se svým novým účtem',
    'login.username.label' => 'Uživatelské jméno',
    'login.password.label' => 'Heslo',
    'login.error' => 'Chybné jméno nebo heslo',
    'login.button' => 'Přihlásit',

    // logout
    'logout' => 'Odhlásit se',

    // dashboard
    'dashboard' => 'Přehled',
    'dashboard.index.pages.title' => 'Stránky',
    'dashboard.index.pages.add' => 'Přidat',
    'dashboard.index.site.title' => 'URL vašeho webu',
    'dashboard.index.account.title' => 'Váš účet',
    'dashboard.index.account.edit' => 'Upravit',
    'dashboard.index.metatags.title' => 'Metadata webu',
    'dashboard.index.metatags.edit' => 'Upravit',
    'dashboard.index.history.title' => 'Vaše poslední změny',
    'dashboard.index.history.text' => 'Zde budou zobrazeny stránky, které jste naposledy měnili, abyste k nim měli snadný přístup.',

    // metatags
    'metatags' => 'Metadata webu',
    'metatags.back' => 'Zpět na přehled',

    // pages
    'pages.show.settings' => 'Nastavení stránky',
    'pages.show.preview' => 'Otevřít náhled',
    'pages.show.changeurl' => 'Změnit URL',
    'pages.show.delete' => 'Smazat tuto stránku',
    'pages.show.subpages.title' => 'Stránky',
    'pages.show.subpages.add' => 'Přidat',
    'pages.show.subpages.empty' => 'Tato strana nemá podstrany',
    'pages.show.files.title' => 'Soubory',
    'pages.show.files.add' => 'Přidat',
    'pages.show.files.empty' => 'Tato strana nemá soubory',
    'pages.show.error.permissions.title' => 'Tato strana není zapisovatelná',
    'pages.show.error.permissions.text'  => 'Prosím zkontrolujte nastavení složky content a všech jejích podsložek a souborů',
    'pages.show.error.permissions.retry'  => 'Zkusit znovu',
    'pages.show.error.notitle.title' => 'Blueprint nemá položku title',
    'pages.show.error.notitle.text' => 'Prosím přidejte title a zkuste to znovu',
    'pages.show.error.notitle.retry' => 'Zkusit znovu',
    'pages.show.error.form'  => 'Prosím vyplňte správně všechny položky',

    'pages.add.title.label' => 'Přidat novou stránku',
    'pages.add.title.placeholder' => 'Nadpis',
    'pages.add.url.label' => 'Přípona URL',
    'pages.add.url.enter' => '(vložte svůj nadpis)',
    'pages.add.url.close' => 'Zavřit',
    'pages.add.url.help' => 'Formát: malé a-z, 0-9 a pomlčky',
    'pages.add.template.label' => 'Šablona',
    'pages.add.error.title' => 'Chybí nadpis',
    'pages.add.error.template' => 'Šablona chybí',
    'pages.add.error.max.headline' => 'Nové stránky nejsou povoleny',
    'pages.add.error.max.text' => 'Bylo dosaženo maximálního počtu podstran pro tuto stránku',
    'pages.url.uid.label' => 'Přípona URL',
    'pages.url.uid.label.option' => 'Vytvořit z nadpisu',
    'pages.url.error.exists' => 'Stránka se stejnou příponou již existuje',
    'pages.url.error.move' => 'Nepodařilo se změnit příponu',
    'pages.delete.headline' => 'Opravdu chcete smazat tuto stránku?',
    'pages.delete.error.home.headline' => 'Úvodní stránka nemůže být smazána',
    'pages.delete.error.home.text' => 'Snažíte se smazat úvodní stránka webu. To není možné a způsobilo by to nechtěné problémy.',
    'pages.delete.error.error.headline' => 'Chybová stránka nemůže být smazána',
    'pages.delete.error.error.text' => 'Snažíte se smazat chybovou stránku. To není možné a způsobilo by to nechtěné problémy.',
    'pages.delete.error.children.headline' => 'Stránka nemůže být smazána',
    'pages.delete.error.children.text' => 'Tato stránka má podstránky a proto nemůže být smazána. Nejdříve prosím smažte všechny podstránky.',
    'pages.delete.error.blocked.headline' => 'TStránka nemůže být smazána',
    'pages.delete.error.blocked.text' => 'Tato stránka je zamčená a proto nemůže být smazána.',
    'pages.search.help' => 'Vyhledat stránku pomocí URL. Pro přechod mezi výsledky použijte šipky nahodu a dolů. Pomocí klávesy Enter pak stránku vyberte.',
    'pages.search.noresults' => 'Pro váš dotaz nejsou žádné výsledky. Zkuste to znovu s jinou URL.',
    'pages.error.missing' => 'Stránku se nepodařilo nalézt.',

    // subpages
    'subpages' => 'Stránky',
    'subpages.index.headline' => 'Stránky v',
    'subpages.index.back' => 'Zpět',
    'subpages.index.add' => 'Přidat novou stránku',
    'subpages.index.add.first.text' => 'Tato stránka ještě nemá podstránky',
    'subpages.index.add.first.button' => 'Přidat první stránku',
    'subpages.index.visible' => 'Viditelné stránky',
    'subpages.index.visible.help' => 'Přetáhněte sem neviditelné stránky, pokud je chcete řadit a udělat viditelné.',
    'subpages.index.invisible' => 'Neviditelné stránky',
    'subpages.index.invisible.help' => 'Přetáhněte sem viditelné stránky, pokud je chcete udělat neviditelné a přestat je řadit.',
    'subpages.error.missing' => 'Stránku se nepodařilo nalézt',

    // files
    'files' => 'Soubory',
    'files.index.headline' => 'Soubory pro',
    'files.index.back' => 'Zpět',
    'files.index.upload' => 'Nahrát nový soubor',
    'files.index.upload.first.text' => 'Tato stránka ješte nemá žádné soubory',
    'files.index.upload.first.button' => 'Nahrajte první soubor',
    'files.index.edit' => 'Upravit',
    'files.index.delete' => 'Smazat',
    'files.show.name.label' => 'Jméno souboru',
    'files.show.info.label' => 'Typ / Velikost / Rozměry',
    'files.show.link.label' => 'Veřejný odkaz',
    'files.show.open' => 'Ukázat/stáhnout soubot',
    'files.show.back' => 'Zpět',
    'files.show.replace' => 'Nahradit',
    'files.show.delete' => 'Smazat',
    'files.show.error.rename' => 'Soubor se nepodařilo odstranit',
    'files.show.error.form' => 'Prosím vyplňte správně všechny položky',
    'files.upload.drop' => 'Sem přetáhněte soubory…',
    'files.upload.click' => '…nebo klikněte pro nahrání',
    'files.replace.drop' => 'Sem přetáhněte soubor…',
    'files.replace.click' => '…nebo klikněte pro nahrazení',
    'files.replace.error.type' => 'Nahraný soubor musí být stejného typu',
    'files.delete.headline' => 'Opravdu chcete smazat tento soubor?',
    'files.error.missing.page' => 'Stránku se nepodařilo nalézt',
    'files.error.missing.file' => 'Soubor se nepodařilo nalézt',

    // users
    'users' => 'Uživatelé',
    'users.index.headline' => 'Všichni uživatelé',
    'users.index.add' => 'Přidat nového uživatele',
    'users.index.edit' => 'Upravit',
    'users.index.delete' => 'Smazat',
    'users.form.username.label' => 'Uživatelské jméno',
    'users.form.username.placeholder' => 'Vaše uživatelské jméno',
    'users.form.username.help' => 'Povolené znaky: malé a-z, 0-9 a pomlčky',
    'users.form.username.readonly' => 'Uživatelské jméno nelze změnit',
    'users.form.firstname.label' => 'Křestní jméno',
    'users.form.lastname.label' => 'Příjmení',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@example.com',
    'users.form.password.label' => 'Heslo',
    'users.form.password.confirm.label' => 'Potvrdit heslo',
    'users.form.password.new.label' => 'Nové heslo',
    'users.form.password.new.confirm.label' => 'Potvrďte nové heslo',
    'users.form.password.new.help' => 'Nechte prázdné pro zachování současného hesla',
    'users.form.language.label' => 'Jazyk',
    'users.form.role.label' => 'Role',
    'users.form.options.headline' => 'Možnosti účtu',
    'users.form.options.message' => 'Poslat email',
    'users.form.options.delete' => 'Smazat účet',
    'users.form.avatar.headline' => 'Profilový obrázek',
    'users.form.avatar.upload' => 'Nahrát profilový obrázek',
    'users.form.avatar.replace' => 'Nahradit profilový obrázek',
    'users.form.avatar.delete' => 'Smazat profilový obrázek',
    'users.form.back' => 'Zpět na uživatele',
    'users.form.error.password.confirm' => 'Prosím potvrďte heslo',
    'users.form.error.update' => 'Uživatel nemohl být aktualizován',
    'users.form.error.create' => 'Uživatel nemohl být vytvořen',
    'users.form.error.permissions.title' => 'Složka account není zapisovatelná',
    'users.form.error.permissions.text' => 'Prosím ověřte že složka /site/accounts existuje a je zapisovatelná.',
    'users.delete.headline' => 'Opravdu chcete smazat tohoto uživatele?',
    'users.delete.error' => 'Uživatel nemohl být smazán',
    'users.avatar.drop' => 'Sem přetáhněte uživatelský obrázek…',
    'users.avatar.click' => '…nebo klikněte pro nahrání',
    'users.avatar.error.type' => 'Můžete nahrát pouze soubory typu JPG, PNG a GIF',
    'users.avatar.error.folder.headline' => 'Složka avatar není zapisovatelná',
    'users.avatar.error.folder.text' => 'Prosím vytvořte složku <strong>/assets/avatars</strong> a udělejte jí zapisovatelnou, aby bylo možné nahrát obrázek.',
    'users.avatar.delete.error' => 'Nebylo možné smazat profilový obrázek',
    'users.avatar.delete.success' => 'Profilový obrázek byl smazán',
    'users.error.missing' => 'Uživatele se nepodařilo nalézt',

    // form fields
    'fields.required' => 'Vyžadované',
    'fields.date.label' => 'Datum',
    'fields.date.months' => array(
      'Leden',
      'Únor',
      'Březen',
      'Duben',
      'Květen',
      'Červen',
      'Červenec',
      'Srpen',
      'Září',
      'Říjen',
      'Listopad',
      'Prosinec'
    ),
    'fields.date.weekdays' => array(
      'neděle',
      'pondělí',
      'úterý',
      'středa',
      'čtvrtek',
      'pátek',
      'sobota'
    ),
    'fields.date.weekdays.short' => array(
      'ne',
      'po',
      'út',
      'st',
      'čt',
      'pá',
      'so'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@example.com',
    'fields.number.label' => 'Číslo',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Stránka',
    'fields.page.placeholder' => 'cesta/ke/strance',
    'fields.password.label' => 'Heslo',
    'fields.structure.add' => 'Přidat',
    'fields.structure.add.first' => 'Přidat první záznam',
    'fields.structure.empty' => 'Zatím nejsou žádné záznamy.',
    'fields.structure.cancel' => 'Zrušit',
    'fields.structure.save' => 'Uložit',
    'fields.structure.edit' => 'Upravit',
    'fields.structure.delete' => 'Smazat',
    'fields.tags.label' => 'Štítky',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Tučný text',
    'fields.textarea.buttons.bold.text' => 'Tučný text',
    'fields.textarea.buttons.italic.label' => 'Kurzíva',
    'fields.textarea.buttons.italic.text' => 'Kurzíva',
    'fields.textarea.buttons.link.label' => 'Odkaz',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Obrázek',
    'fields.textarea.buttons.file.label' => 'Soubor',
    'fields.toggle.yes' => 'Ano',
    'fields.toggle.no' => 'Ne',
    'fields.toggle.on' => 'Zap',
    'fields.toggle.off' => 'Vyp',

    // textarea overlays
    'editor.link.url.label' => 'Cílové URL',
    'editor.link.text.label' => 'Text odkazu',
    'editor.link.text.help' => 'Text odkazu je nepovinný',
    'editor.email.address.label' => 'Vložit emailovou adresu',
    'editor.email.address.placeholder' => 'mail@example.com',
    'editor.email.text.label' => 'Text odkazu',
    'editor.email.text.help' => 'Text odkazu je nepovinný',
    'editor.file.empty' => 'Tato stránka nemá žádné soubory',
    'editor.image.empty' => 'Tato stránka nemá žádné obrázky',

    // error page
    'error' => 'Chyba',
    'error.headline' => 'Chyba',

  )
);
