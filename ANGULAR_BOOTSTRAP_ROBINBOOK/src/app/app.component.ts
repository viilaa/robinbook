import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'RobinBook';
  isLoggin = true;

  constructor(){}

  handleLogin = () =>{
    this.isLoggin = !this.isLoggin;
  }
}
