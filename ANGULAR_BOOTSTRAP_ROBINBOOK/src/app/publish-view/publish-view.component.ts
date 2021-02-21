import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-publish-view',
  templateUrl: './publish-view.component.html',
  styleUrls: ['./publish-view.component.css']
})
export class PublishViewComponent implements OnInit {

  newBook = { name: "", firstSurname: "", secondSurname: "", birthday: "01/01/1998", idCard: "", email: "", password: "", role: "" };

  constructor(private httpClient: HttpClient) { }

  ngOnInit(): void {
  }

}
