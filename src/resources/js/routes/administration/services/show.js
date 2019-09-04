const ServiceShow = () => import('@pages/administration/services/Show.vue');

export default {
    name: 'administration.services.show',
    path: ':service',
    component: ServiceShow,
    meta: {
        breadcrumb: 'show',
        title: 'Services Profile',
    },
};
