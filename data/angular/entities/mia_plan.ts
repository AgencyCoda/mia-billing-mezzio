import { MiaModel } from "@agencycoda/mia-core";

export class MiaPlan extends MiaModel {
    id: number = 0;
    title: string = '';
    slug: string = '';
    caption: string = '';
    price_month: string = '';
    price_year: string = '';
    paypal_plan_id: string = '';
    paypal_plan_id_year: string = '';
    data: string = '';
    is_show: number = 0;

}