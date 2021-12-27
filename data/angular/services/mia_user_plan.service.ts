import { Injectable } from '@angular/core';
import { MiaUserPlan } from '../entities/mia_user_plan';
import { MiaBaseCrudHttpService } from '@agencycoda/mia-core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class MiaUserPlanService extends MiaBaseCrudHttpService<MiaUserPlan> {

  constructor(
    protected http: HttpClient
  ) {
    super(http);
    this.basePathUrl = environment.baseUrl + 'mia_user_plan';
  }
 
}