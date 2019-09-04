const ServiceCreate = () => import('../../../pages/administration/services/Create.vue');

export default {
    name: 'administration.services.create',
    path: 'create',
    component: ServiceCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Services',
    },
};
