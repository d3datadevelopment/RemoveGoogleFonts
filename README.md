[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ Remote Font Replacement für OXID eShop

Bindet Google Fonts in den OXID Standardthemes (Wave, Flow) lokal ein.

## enthält

* [Raleway](https://fonts.google.com/specimen/Raleway) 200 (ExtraLight) roman + italic
* [Raleway](https://fonts.google.com/specimen/Raleway) 400 (Regular) roman + italic
* [Raleway](https://fonts.google.com/specimen/Raleway) 600 (SemiBold) roman + italic
* [Raleway](https://fonts.google.com/specimen/Raleway) 700 (Bold) roman + italic

Weitere Schriftarten sind ggf. individuell zu ergänzen (z.B. durch einen Patch).

## Inhaltsverzeichnis

- [Installation](#installation)
- [Changelog](#changelog)
- [Beitragen](#beitragen)
- [Lizenz](#lizenz)
- [weitere Lizenzen und Nutzungsbedingungen](#weitere-lizenzen-und-nutzungsbedingungen)

## Installation

Dieses Paket erfordert einen mit Composer installierten OXID eShop in einer in der [composer.json](composer.json) definierten Version.

Öffnen Sie eine Kommandozeile und navigieren Sie zum Stammverzeichnis des Shops (Elternverzeichnis von source und vendor). Führen Sie den folgenden Befehl aus. Passen Sie die Pfadangaben an Ihre Installationsumgebung an.

```bash
php composer require d3/removegooglefonts:^1.0
```

Aktivieren Sie das Modul im Shopadmin unter "Erweiterungen -> Module".

## Changelog

Siehe [CHANGELOG](CHANGELOG.md) für weitere Informationen.

## Beitragen

Wenn Sie eine Verbesserungsvorschlag haben, legen Sie einen Fork des Repositories an und erstellen Sie einen Pull Request. Alternativ können Sie einfach ein Issue erstellen. Fügen Sie das Projekt zu Ihren Favoriten hinzu. Vielen Dank.

- Erstellen Sie einen Fork des Projekts
- Erstellen Sie einen Feature Branch (git checkout -b feature/AmazingFeature)
- Fügen Sie Ihre Änderungen hinzu (git commit -m 'Add some AmazingFeature')
- Übertragen Sie den Branch (git push origin feature/AmazingFeature)
- Öffnen Sie einen Pull Request

## Lizenz
(Stand: 31.08.2022)

Vertrieben unter der GPLv3 Lizenz.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

Diese Software wird unter der GNU GENERAL PUBLIC LICENSE Version 3 vertrieben.
```

Die vollständigen Copyright- und Lizenzinformationen entnehmen Sie bitte der [LICENSE](LICENSE.md)-Datei, die mit diesem Quellcode verteilt wurde.

## weitere Lizenzen und Nutzungsbedingungen

### Schriftartendateien "Raleway" in allen enthaltenen Ausprägungen (Stand 31.08.2022)

Quelle: [https://fonts.google.com/specimen/Raleway/about](https://fonts.google.com/specimen/Raleway/about)
Lizenz: [https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL)

These fonts are licensed under the Open Font License.

You can use them in your products & projects – print or digital, commercial or otherwise.

This isn't legal advice, please consider consulting a lawyer and see the full license for all details.