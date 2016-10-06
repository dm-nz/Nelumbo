# Nelumbo

Nelumbo is a clean and simple WordPress theme based on Foundation 6 and Underscores.

## Customizing

### Requirements

You'll need the following software installed to get started.

  * [Node.js](http://nodejs.org) 0.12+: Use the installer provided on the NodeJS website.
    * With Node installed, run `[sudo] npm install -g gulp bower`.
  * [Git](http://git-scm.com/downloads): Use the installer for your OS.
    * Windows users can also try [Git for Windows](http://git-for-windows.github.io/).

### Installing

The Foundation CLI is installed through npm. This will add the `foundation` command to your system.

```bash
npm install -g foundation-cli
```

Open theme's folder in your command line, and install the needed dependencies:

```bash
npm install
npm install gulp-concat
npm install gulp-uglify
npm install gulp-rename
npm install gulp-cache
bower install
```

### Commands

#### Watch

While inside of theme's folder, use the `watch` command to compile all scss and js files.

```bash
foundation watch
```

#### Build

To build customized theme for production, use `foundation build`.

```bash
foundation build
```