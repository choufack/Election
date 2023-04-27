import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Region} from '../Models/region.model';
@Injectable({
  providedIn: 'root'
})
export class RegionService {

  CREATE_REGION ="http://localhost:8000/api/region";

  save(region:Region):any{
    const req=this.client.post<any>('{$CREATE_REGION}',region);
    req.subscribe(data=>{return data;}, error =>{return null});
    
  }

  constructor(public client:HttpClient) { }

}
