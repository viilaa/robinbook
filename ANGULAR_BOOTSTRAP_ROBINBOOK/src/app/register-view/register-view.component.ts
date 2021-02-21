import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-register-view',
  templateUrl: './register-view.component.html',
  styleUrls: ['./register-view.component.css']
})
export class RegisterViewComponent implements OnInit {

  selectedRole: string[] = ['reader', 'writer'];

  newUser = { username: "test", name: "", surname1: "", surname2: "", date_of_birth: "1998-01-01", dni: "", email: "", release_date: "1998-01-01", password: "", roles: "reader" };

  constructor(private httpClient: HttpClient) { }

  ngOnInit(): void {
  }

  public registerNewUser(newUser: any) {
    console.log(this.newUser);
    this.httpClient.post<any>("https://localhost:8000/users", newUser).subscribe(response => {
      console.log(response);
    });
  }

  public setName(event: any) {
    this.newUser.name = event.target.value;
  }
  public setFirstSurname(event: any) {
    this.newUser.surname1 = event.target.value;
  }
  public setSecondSurname(event: any) {
    this.newUser.surname2 = event.target.value;
  }
  public setIdCard(event: any) {
    this.newUser.dni = event.target.value;
  }
  public setEmail(event: any) {
    this.newUser.email = event.target.value;
  }
  public setPassword(event: any) {
    this.newUser.password = event.target.value;
  }
  // public setRole(event: any) {
  //   this.newUser.role = event.target.value;
  // }

}
