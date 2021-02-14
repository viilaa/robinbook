import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-register-view',
  templateUrl: './register-view.component.html',
  styleUrls: ['./register-view.component.css']
})
export class RegisterViewComponent implements OnInit {

  selectedRole: string[] = ['reader', 'writer'];

  constructor() { }

  ngOnInit(): void {
  }

}
