# codeigniter-starter
Starter app template

CodeIgniter: 3.1.3
- REST: https://github.com/chriskacerguis/codeigniter-restserver
- HMVC: https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
- forensics profiler toolbar : https://github.com/lonnieezell/codeigniter-forensics
- debug helper : custom


# Riot

Made With Riot is a public showcase for websites, webapps and components made using Riot.js library.

## Working locally

To run the project, follow the steps bellow after cloning the repository:

```bash
npm install
gulp compile:all
gulp lift
```

Then access the application on http://localhost:8000/

### Development

For developing, simply run the command `gulp watch:all` for automatic re-compiling on file changes.

For anyone interested, these are the technologies used for this project:

**JavaScript Libraries used:**

- Riot;
- Good ol' Vanilla JavaScript.


**CSS Tools used:**

- Sass


**Task Runner:**

- Gulp



### Deploying on gh-pages

To deploy on production simply run the following tasks on your local environment

```bash
gulp compile:all
gulp deploy
```

Then follow the instructions on your terminal.
