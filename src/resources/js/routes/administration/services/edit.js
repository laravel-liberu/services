const ServiceEdit = () => import('../../../pages/administration/services/Edit.vue');

export default {
    name: 'administration.services.edit',
    path: ':service/edit',
    component: ServiceEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Services',
    },
};
