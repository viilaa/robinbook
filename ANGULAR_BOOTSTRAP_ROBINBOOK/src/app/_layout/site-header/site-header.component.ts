import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'site-header',
  templateUrl: './site-header.component.html',
  styleUrls: ['./site-header.component.css']
})
export class SiteHeaderComponent implements OnInit {

  constructor() { }

  word="";
  
  ngOnInit(): void {
  }

  public setWord(event: any) {
    this.word = event.target.value;
  }

}
