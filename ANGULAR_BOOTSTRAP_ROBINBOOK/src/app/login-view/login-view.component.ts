import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-login-view',
  templateUrl: './login-view.component.html',
  styleUrls: ['./login-view.component.css']
})
export class LoginViewComponent implements OnInit {

  @Input() onLogin:any;

  constructor() { }

  ngOnInit(): void {
  }

  handleClick(){
    this.onLogin();
  }

}
