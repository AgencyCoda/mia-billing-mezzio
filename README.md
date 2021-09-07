# mia-billing-mezzio



    $app->route('/mia-billing-info/fetch/{id}', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\FetchHandler::class], ['GET', 'OPTIONS', 'HEAD'], 'mia_billing_info.fetch');
    $app->route('/mia-billing-info/list', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\ListHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_billing_info.list');
    $app->route('/mia-billing-info/remove/{id}', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\RemoveHandler::class], ['GET', 'DELETE', 'OPTIONS', 'HEAD'], 'mia_billing_info.remove');
    $app->route('/mia-billing-info/save', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\SaveHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_billing_info.save');


    $app->route('/mia_plan/fetch/{id}', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Plan\FetchHandler::class], ['GET', 'OPTIONS', 'HEAD'], 'mia_plan.fetch');
    $app->route('/mia-plan/fetch-slug/{slug}', [\Mia\Billing\Handler\Plan\FetchSlugHandler::class], ['GET', 'OPTIONS', 'HEAD'], 'mia_plan.fetch-slug');
    $app->route('/mia_plan/list', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Plan\ListHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_plan.list');
    $app->route('/mia_plan/remove/{id}', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Plan\RemoveHandler::class], ['GET', 'DELETE', 'OPTIONS', 'HEAD'], 'mia_plan.remove');
    $app->route('/mia_plan/save', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Plan\SaveHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_plan.save');