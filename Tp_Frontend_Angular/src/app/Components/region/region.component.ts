import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-region',
  templateUrl: './region.component.html',
  styleUrls: ['./region.component.scss']
})
export class RegionComponent implements OnInit {
   public constructor (public formBuilder:FormBuilder){

  }
  public formR!:FormGroup;
  ngOnInit(): void {
   this.formR=this.formBuilder.group({
    "Label":["",Validators.required],
   })
  }
   OnRegisterRegion(){}
}
