import routeImporter from '@core-modules/importers/routeImporter';

const routes = routeImporter(require.context('./services', false, /.*\.js$/));
const RouterView = () => import('@core-pages/Router.vue');

export default {
    path: 'services',
    component: RouterView,
    meta: {
        breadcrumb: 'services',
        route: 'administration.services.index',
    },
    children: routes,
};
