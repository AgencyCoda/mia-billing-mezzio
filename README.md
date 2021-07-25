# mia-billing-mezzio



    $app->route('/mia-billing-info/fetch/{id}', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\FetchHandler::class], ['GET', 'OPTIONS', 'HEAD'], 'mia_billing_info.fetch');
    $app->route('/mia-billing-info/list', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\ListHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_billing_info.list');
    $app->route('/mia-billing-info/remove/{id}', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\RemoveHandler::class], ['GET', 'DELETE', 'OPTIONS', 'HEAD'], 'mia_billing_info.remove');
    $app->route('/mia-billing-info/save', [\Mia\Auth\Handler\AuthHandler::class, \Mia\Billing\Handler\Info\SaveHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_billing_info.save');