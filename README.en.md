[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ Remote Font Replacement for OXID eShop

Integrates Google fonts locally in the OXID default themes (Wave, Flow).

## contains

* [Raleway](https://fonts.google.com/specimen/Raleway) 200 (ExtraLight) roman + italic
* [Raleway](https://fonts.google.com/specimen/Raleway) 400 (Regular) roman + italic
* [Raleway](https://fonts.google.com/specimen/Raleway) 600 (SemiBold) roman + italic
* [Raleway](https://fonts.google.com/specimen/Raleway) 700 (Bold) roman + italic

Other fonts may have to be added individually (e.g. through a patch).

## Table of content

- [Installation](#installation)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [License](#license)
- [Further licences and terms of use](#further-licences-and-terms-of-use)

## Installation

This package requires an OXID eShop installed with Composer in a version defined in the [composer.json](composer.json).

Open a command line and navigate to the root directory of the shop (parent directory of source and vendor). Execute the following command. Adapt the path details to your installation environment.

```bash
php composer require d3/removegooglefonts:^1.0
``` 

Activate the module in Shopadmin under "Extensions -> Modules".

## Changelog

See [CHANGELOG](CHANGELOG.md) for further informations.

## Contributing

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue. Don't forget to give the project a star! Thanks again!

- Fork the Project
- Create your Feature Branch (git checkout -b feature/AmazingFeature)
- Commit your Changes (git commit -m 'Add some AmazingFeature')
- Push to the Branch (git push origin feature/AmazingFeature)
- Open a Pull Request

## License
(status: 2022-08-31)

Distributed under the GPLv3 license.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

This software is distributed under the GNU GENERAL PUBLIC LICENSE version 3.
```

For full copyright and licensing information, please see the [LICENSE](LICENSE.md) file distributed with this source code.

## Further licences and terms of use

### "Raleway" font files in all included versions (as of 2022-08-31)

source: [https://fonts.google.com/specimen/Raleway/about](https://fonts.google.com/specimen/Raleway/about)
license: [https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL)

These fonts are licensed under the Open Font License.

You can use them in your products & projects – print or digital, commercial or otherwise.

This isn't legal advice, please consider consulting a lawyer and see the full license for all details.