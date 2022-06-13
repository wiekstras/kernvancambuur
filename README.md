## Kern Van Cambuur

### How to run
For linux add these variables to your `.bashrc`/`.zshrc` or `.profile` and start a new console

```bash
export PHPUSER=`id -u`
export PHPGROUP=`id -g`
```

Run this command to serve the docker container.
>- docker-compose up -d --build site

### Commands

Example commands:
>- docker-compose run --rm composer update
>- docker-compose run --rm npm run dev
>- docker-compose run --rm artisan migrate

# Vue 3 + Vite

This template should help get you started developing with Vue 3 in Vite. The template uses Vue 3 `<script setup>` SFCs, check out the [script setup docs](https://v3.vuejs.org/api/sfc-script-setup.html#sfc-script-setup) to learn more.

## Recommended IDE Setup

- [VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=johnsoncodehk.volar)
# app


