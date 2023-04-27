import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Region } from 'src/app/Models/region.model';
import { RegionService } from 'src/app/Services/region.service';


@Component({
  selector: 'app-region',
  templateUrl: './region.component.html',
  styleUrls: ['./region.component.scss']
})
export class RegionComponent implements OnInit {
  error?:string
  success?:string
  public formR!:FormGroup;
   public constructor (public formBuilder:FormBuilder,public service:RegionService){

  }
  
  ngOnInit(): void {
   this.formR=this.formBuilder.group({
    "Label":["",Validators.required],
   })
  }
   OnRegisterRegion(){
    const r = new Region;
    r.label = this.formR.value
    const res = this.service.save(r)
    if (res!=null) {
      this.success = "Enregistrement reussi";
      console.log(this.success)
    }else{
      this.error="Echec d'enregistrement";
      console.log(this.error)
    }
   }
}
