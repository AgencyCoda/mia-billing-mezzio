import { MiaModel } from "@agencycoda/mia-core";

export class MiaBillingInfo extends MiaModel {
    id: number = 0;
    user_id: number = 0;
    type: number = 0;
    company: string = '';
    firstname: string = '';
    lastname: string = '';
    legal_number: string = '';
    address: string = '';
    city: string = '';
    zip_code: string = '';
    state: string = '';
    country: string = '';
    phone: string = '';
    email: string = '';
    status: number = 0;
    created_at: string = '';
    updated_at: string = '';
    deleted: number = 0;

}