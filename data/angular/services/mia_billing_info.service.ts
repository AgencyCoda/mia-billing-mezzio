import { Injectable } from '@angular/core';
import { MiaBillingInfo } from '../entities/mia_billing_info';
import { MiaBaseCrudHttpService } from '@agencycoda/mia-core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class MiaBillingInfoService extends MiaBaseCrudHttpService<MiaBillingInfo> {

  constructor(
    protected http: HttpClient
  ) {
    super(http);
    this.basePathUrl = environment.baseUrl + 'mia-billing-info';
  }
 
}