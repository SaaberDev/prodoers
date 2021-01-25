<?php

    use Tabuna\Breadcrumbs\Breadcrumbs;
    use Tabuna\Breadcrumbs\Trail;

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */

    /*
    | ----------------------> Dashboard <----------------------
    */
    // Dashboard
    Breadcrumbs::for('dashboard.index', fn(Trail $trail) => $trail
        ->push('Dashboard', route('dashboard.index'))
    );

    /*
    | ----------------------> Services <----------------------
    */
    // Dashboard > Services
    Breadcrumbs::for('services.service.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Services', route('services.service.index'))
    );
    // Dashboard > Services > Add Service
    Breadcrumbs::for('services.service.create', fn(Trail $trail) => $trail
        ->parent('services.service.index')
        ->push('Add Service', route('services.service.create'))
    );
    // Dashboard > Services > Edit Service
    Breadcrumbs::for('services.service.edit', fn(Trail $trail) => $trail
        ->parent('services.service.index')
        ->push('Edit Service', route('services.service.edit', ['id']))
    );

    /*
    | ----------------------> Service Categories <----------------------
    */
    // Dashboard > Service Categories
    Breadcrumbs::for('services.category.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Service Categories', route('services.category.index'))
    );
    // Dashboard > Service Categories > Add Service Category
    Breadcrumbs::for('services.category.create', fn(Trail $trail) => $trail
        ->parent('services.category.index')
        ->push('Add Service Category', route('services.category.create'))
    );

    // Dashboard > Service Categories > Edit Category
    Breadcrumbs::for('services.category.edit', fn(Trail $trail) => $trail
        ->parent('services.category.index')
        ->push('Edit Category', route('services.category.edit', ['id']))
    );

    /*
    | ----------------------> Designwala Chat <----------------------
    */
    // Dashboard > Designwala Chat
    Breadcrumbs::for('chats.designwala_chat.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Designwala Chat', route('chats.designwala_chat.index'))
    );

    /*
    | ----------------------> Order Chat <----------------------
    */
    // Dashboard > Order Chat
    Breadcrumbs::for('chats.order_chat.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Order Chat', route('chats.order_chat.index'))
    );

    /*
    | ----------------------> Orders <----------------------
    */
    // Dashboard > Orders
    Breadcrumbs::for('orders.order.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Orders', route('orders.order.index'))
    );
    // Dashboard > Orders > Order Details
    Breadcrumbs::for('orders.order.show', fn(Trail $trail) => $trail
        ->parent('orders.order.index')
        ->push('Order Details', route('orders.order.show'))
    );

    /*
    | ----------------------> Payments <----------------------
    */
    // Dashboard > Payments
    Breadcrumbs::for('orders.payment.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Payments', route('orders.payment.index'))
    );
    // Dashboard > Payments > Payment Details
    Breadcrumbs::for('orders.payment.show', fn(Trail $trail) => $trail
        ->parent('orders.payment.index')
        ->push('Payment Details', route('orders.payment.show'))
    );

    /*
    | ----------------------> Blog <----------------------
    */
    // Dashboard > Blog
    Breadcrumbs::for('blogs.blog.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Blog', route('blogs.blog.index'))
    );
    // Dashboard > Blog > Add Blog
    Breadcrumbs::for('blogs.blog.create', fn(Trail $trail) => $trail
        ->parent('blogs.blog.index')
        ->push('Add Blog', route('blogs.blog.create'))
    );
    // Dashboard > Blog > Edit Blog
    Breadcrumbs::for('blogs.blog.edit', fn(Trail $trail) => $trail
        ->parent('blogs.blog.index')
        ->push('Edit Blog', route('blogs.blog.edit'))
    );
    // Dashboard > Blog > Blog Details
    Breadcrumbs::for('blogs.blog.show', fn(Trail $trail) => $trail
        ->parent('blogs.blog.index')
        ->push('Blog Details', route('blogs.blog.show'))
    );

    /*
    | ----------------------> Blog Categories <----------------------
    */
    // Dashboard > Blog Categories
    Breadcrumbs::for('blogs.category.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Blog Categories', route('blogs.category.index'))
    );
    // Dashboard > Blog Categories > Edit Blog Category
    Breadcrumbs::for('blogs.category.edit', fn(Trail $trail) => $trail
        ->parent('blogs.category.index')
        ->push('Edit Blog Category', route('blogs.category.edit'))
    );

    /*
    | ----------------------> Clients <----------------------
    */
    // Dashboard > Clients
    Breadcrumbs::for('clients.client.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Clients', route('clients.client.index'))
    );
    // Dashboard > Client > Client Details
    Breadcrumbs::for('clients.client.show', fn(Trail $trail) => $trail
        ->parent('clients.client.index')
        ->push('Client Details', route('clients.client.show'))
    );
    // Dashboard > Client > Client Details > Order Details
//    Breadcrumbs::for('orders.order.show', fn(Trail $trail) => $trail
//        ->parent('clients.client.show')
//        ->push('Client Details', route('orders.order.show'))
//    );

    /*
    | ----------------------> Subscribers <----------------------
    */
    // Dashboard > Subscribers
    Breadcrumbs::for('clients.subscribers.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Subscribers', route('clients.subscribers.index'))
    );

    /*
    | ----------------------> Reviews <----------------------
    */
    // Dashboard > Reviews
    Breadcrumbs::for('reviews.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push('Reviews', route('reviews.index'))
    );

    /*
    | ----------------------> FAQ's <----------------------
    */
    // Dashboard > FAQ's
    Breadcrumbs::for('faqs.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("FAQ's", route('faqs.index'))
    );
    // Dashboard > FAQ's > Add FAQ
    Breadcrumbs::for('faqs.create', fn(Trail $trail) => $trail
        ->parent('faqs.index')
        ->push("Add FAQ", route('faqs.create'))
    );
    // Dashboard > FAQ's > Edit FAQ
    Breadcrumbs::for('faqs.edit', fn(Trail $trail) => $trail
        ->parent('faqs.index')
        ->push("Edit FAQ", route('faqs.edit'))
    );

    /*
    | ----------------------> Coupons <----------------------
    */
    // Dashboard > Coupons
    Breadcrumbs::for('offers.coupon.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Coupons", route('offers.coupon.index'))
    );
    // Dashboard > Coupons > Add Coupon
    Breadcrumbs::for('offers.coupon.create', fn(Trail $trail) => $trail
        ->parent('offers.coupon.index')
        ->push("Add Coupon", route('offers.coupon.create'))
    );
    // Dashboard > Coupons > Edit Coupon
    Breadcrumbs::for('offers.coupon.edit', fn(Trail $trail) => $trail
        ->parent('offers.coupon.index')
        ->push("Edit Coupon", route('offers.coupon.edit'))
    );

    /*
    | ----------------------> Affiliates <----------------------
    */
    // Dashboard > Affiliates
    Breadcrumbs::for('offers.affiliate.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Affiliates", route('offers.affiliate.index'))
    );
    // Dashboard > Affiliates > Add Affiliate
    Breadcrumbs::for('offers.affiliate.create', fn(Trail $trail) => $trail
        ->parent('offers.affiliate.index')
        ->push("Add Affiliate", route('offers.affiliate.create'))
    );
    // Dashboard > Affiliates > Edit Affiliate
    Breadcrumbs::for('offers.affiliate.edit', fn(Trail $trail) => $trail
        ->parent('offers.affiliate.index')
        ->push("Edit Affiliate", route('offers.affiliate.edit'))
    );

    /*
    | ----------------------> All Mail <----------------------
    */
    // Dashboard > All Mail
    Breadcrumbs::for('promotions.email_marketing.all_mail.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("All Mail", route('promotions.email_marketing.all_mail.index'))
    );
    // Dashboard > All Mail > Compose Mail
    Breadcrumbs::for('promotions.email_marketing.all_mail.create', fn(Trail $trail) => $trail
        ->parent('promotions.email_marketing.all_mail.index')
        ->push("Compose Mail", route('promotions.email_marketing.all_mail.create'))
    );

    /*
    | ----------------------> Drafts <----------------------
    */
    // Dashboard > Drafts
    Breadcrumbs::for('promotions.email_marketing.draft.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Drafts", route('promotions.email_marketing.draft.index'))
    );
    // Dashboard > Drafts > Edit Draft Mail
    Breadcrumbs::for('promotions.email_marketing.draft.edit', fn(Trail $trail) => $trail
        ->parent('promotions.email_marketing.draft.index')
        ->push("Edit Draft Mail", route('promotions.email_marketing.draft.edit'))
    );

    /*
    | ----------------------> Advertisement Banner <----------------------
    */
    // Dashboard > Advertisement Banner
    Breadcrumbs::for('promotions.advertisement_banner.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Advertisement Banner", route('promotions.advertisement_banner.index'))
    );
    // Dashboard > Advertisement Banner > Edit Banner
    Breadcrumbs::for('promotions.advertisement_banner.edit', fn(Trail $trail) => $trail
        ->parent('promotions.advertisement_banner.index')
        ->push("Edit Banner", route('promotions.advertisement_banner.edit'))
    );

    /*
    | ----------------------> Designwalas <----------------------
    */
    // Dashboard > Designwalas
    Breadcrumbs::for('designwalas.designwala.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Designwalas", route('designwalas.designwala.index'))
    );
    // Dashboard > Designwala's Profile
    Breadcrumbs::for('designwalas.designwala.show', fn(Trail $trail) => $trail
        ->parent('designwalas.designwala.index')
        ->push("Designwala's Profile", route('designwalas.designwala.show'))
    );
    // Dashboard > Designwala's Profile > Designwala's Order
//    Breadcrumbs::for('orders.order.show', fn(Trail $trail) => $trail
//        ->parent('designwalas.designwala.index')
//        ->push("Designwala's Order", route('orders.order.show'))
//    );

    /*
    | ----------------------> Manage Roles <----------------------
    */
    // Dashboard > Roles
    Breadcrumbs::for('roles_permissions.role.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Roles", route('roles_permissions.role.index'))
    );
    // Dashboard > Roles > Add Role
    Breadcrumbs::for('roles_permissions.role.create', fn(Trail $trail) => $trail
        ->parent('roles_permissions.role.index')
        ->push("Add Role", route('roles_permissions.role.create'))
    );
    // Dashboard > Roles > Edit Role
    Breadcrumbs::for('roles_permissions.role.edit', fn(Trail $trail) => $trail
        ->parent('roles_permissions.role.index')
        ->push("Edit Role", route('roles_permissions.role.edit'))
    );

    /*
    | ----------------------> Settings <----------------------
    */
    /*
    | ----------------------> SEO Tools <----------------------
    */
    // Dashboard > Google Analytics
    Breadcrumbs::for('settings.seo_tools.google_analytics.index_google_analytics', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Google Analytics", route('settings.seo_tools.google_analytics.index_google_analytics'))
    );
    // Dashboard > Open Graph Meta
    Breadcrumbs::for('settings.seo_tools.open_graph.index_open_graph', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Open Graph Meta", route('settings.seo_tools.open_graph.index_open_graph'))
    );
    // Dashboard > Open Graph Meta > Edit Open Graph Meta
    Breadcrumbs::for('settings.seo_tools.open_graph.edit_open_graph', fn(Trail $trail) => $trail
        ->parent('settings.seo_tools.open_graph.index_open_graph')
        ->push("Edit Open Graph Meta", route('settings.seo_tools.open_graph.edit_open_graph'))
    );

    /*
    | ----------------------> Site CMS <----------------------
    */
    // Dashboard > Site CMS
    Breadcrumbs::for('settings.site_cms.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Site CMS", route('settings.site_cms.index'))
    );

    /*
    | ----------------------> Policies <----------------------
    */
    // Dashboard > Policies
    Breadcrumbs::for('settings.policy.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Policies", route('settings.policy.index'))
    );

    /*
    | ----------------------> Footer Section <----------------------
    */
    // Dashboard > Footer
    Breadcrumbs::for('settings.footer_section.footer.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Footer", route('settings.footer_section.footer.index'))
    );

    /*
    | ----------------------> Social Links <----------------------
    */
    // Dashboard > Social Links
    Breadcrumbs::for('settings.footer_section.social_link.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Social Links", route('settings.footer_section.social_link.index'))
    );
    // Dashboard > Social Links > Add Social Links
    Breadcrumbs::for('settings.footer_section.social_link.create', fn(Trail $trail) => $trail
        ->parent('settings.footer_section.social_link.index')
        ->push("Add Social Links", route('settings.footer_section.social_link.create'))
    );
    // Dashboard > Social Links > Edit Social Links
    Breadcrumbs::for('settings.footer_section.social_link.edit', fn(Trail $trail) => $trail
        ->parent('settings.footer_section.social_link.index')
        ->push("Edit Social Links", route('settings.footer_section.social_link.edit'))
    );

    /*
    | ----------------------> Maintenance Mode <----------------------
    */
    // Dashboard > Maintenance Mode
    Breadcrumbs::for('settings.maintenance.index', fn(Trail $trail) => $trail
        ->parent('dashboard.index')
        ->push("Maintenance Mode", route('settings.maintenance.index'))
    );

    /*
    |--------------------------------------------------------------------------
    | User Panel Routes
    |--------------------------------------------------------------------------
    */
