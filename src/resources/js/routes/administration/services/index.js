const ServiceIndex = () => import('../../../pages/administration/services/Index.vue');

export default {
    name: 'administration.services.index',
    path: '',
    component: ServiceIndex,
    meta: {
        breadcrumb: 'index',
        title: 'Services',
    },
};
