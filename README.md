# Services

Services package is an extesion of the Laravel Enso enviroment, designed for services management.

**Note:** *This package cannot be used outside of enso enviroment and is not included in [Laravel Enso Core](https://github.com/laravel-enso/Core) packages.*

### Features
* crud operations for services
* includes seeders & factories
* includes front-end assets
* tests

### Instalation
* install the package using composer: `composer require laravel-enso/services`
* adds the following alias in `webackpack.mix.js`
```
.webpackConfig({
        resolve: {
            extensions: ['.js', '.vue', '.json'],
            alias: {
                 //other aliases
                '@services': `${__dirname}/vendor/laravel-enso/services/src/resources/js`,
            },
        },
    })
```
* in `resources/js/router.js` file, verify that `RouteMerger` is imported, or import it

`import RouteMerger from '@core-modules/importers/RouteMerger';`

* make sure `routeImporter` is also imported

`import routeImporter from '@core-modules/importers/routeImporter';`

* then use `RouteMerger` to import front-end assets using the alias defined in `webpack.mix.js`

```
(new RouteMerger(routes))
    .add(routeImporter(require.context('./routes', false, /.*\.js$/)))
    .add(routeImporter(require.context('@services/routes', false, /.*\.js$/)));
```

* in `resources/js/app.js` import the package's icons

`import '@services/icons'`

* make sure `hot module replacement` is **not** active, and run `yarn dev` or `npm run dev`

### Publishes
* you can publish the product seeder and customize it to your liking

`php artisan vendor:publish --tag=services-factories`

### Icons
The package uses the following icons:
* `hand-holding-usd`

### Contributions

are welcome. Pull requests are great, but issues are good too.

### License

This package is released under the MIT license.