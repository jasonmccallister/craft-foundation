![Craft Foundation](https://s3-us-west-1.amazonaws.com/themccallister.com/craft-foundation.png)

# Craft Foundation

This repository is designed to get you started as quickly as possible with Craft, Foundation 5, Grunt and SCSS. Letting you focus on what matters most, developing your next coolest website ever.

#### Table of Contents

1. [Requirements](#requirements)  
2. [Structure](#structure)
3. [Installation and Usage](#installation)

<a name="requirements"/>
### Requirements

- Node.JS (for Grunt specifically)
- Sass (however you want to install it)
- Working webserver to actually use Craft

<a name="structure"/>
### Structure

This repository has been structured to allow remote teams to work together a little more effectively. We have created a structure and place for everything, why reinvent the wheel for each project?  

- **app**

	Will contain the core files for Craft, makes updating Craft with a repo isolated and simple.

	***typical***: /assetsourcetypes, /consolecommands, /controllers and etc.

- **config**

	Contains the multi-environment configuration for the live site, dev and local. Change the values as needed.

	***typical***: db.php, general.php, /local (local dev only)

- **design**

	Place PSDs, Sketch files or whatever you need to work on locally. The contents of this directory **WILL NOT** be included with the repo.

	***typical***: .psd, .ai, .sketch

- **plugins**

	As simple as it sounds, will contain plugins needed on the project...

	***typical***: /pluginname, /pluginname2

- **public**

	The public directory, where your web server should be pointed as the root of the site.

	***typical***: .htaccess, /assets, index.php, web.config

- **shared**

	Place all shared assets in this directory. Anything you need to share with the rest of the team.

	***typical***: extracted-logo.ai, /fonts

- **source**

	This is for 'source' files. SCSS, LESS, JS and whatever else you may need to compile for the project.

	***typical***: /scss/app.scss, /js/app.js, /js/function.js

- **storage**

	Craft's storage directory. Included in the repo but the contents **WILL NOT** be included in the repo.

	***typical***: /runtime, /backups

- **templates**

	Craft templates will go here, by default this is setup for the "partial block model" for developing Craft websites.

	***typical***: /_partials, index.twig, /layouts/base.twig

<a name="installation"/>
### Installation

**First things first**: you will have to 'manually' download Craft from here: http://buildwithcraft.com. Due to licensing concerns we **DO NOT** include the core of Craft as part of this repository.

#### Local
