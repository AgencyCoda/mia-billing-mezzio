import { MiaModel } from "@agencycoda/mia-core";

export class MiaUserPlan extends MiaModel {
    id: number = 0;
    user_id: number = 0;
    plan_id: number = 0;
    frecuency: number = 0;
    amount: string = '';
    start: string = '';
    end: string = '';
    provider_id: number = 0;
    data: string = '';
    status: number = 0;
    created_at: string = '';
    updated_at: string = '';

}