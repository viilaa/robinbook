import { Component, OnInit } from '@angular/core';
import { BooksService } from '../books.service';
import { Book } from '../book';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-home-view',
  templateUrl: './home-view.component.html',
  styleUrls: ['./home-view.component.css']
})
export class HomeViewComponent implements OnInit {

  books= <any>[];
  responsiveOptions: any;

  constructor(/*private Books: BooksService,*/ private httpClient: HttpClient) {
    // this.httpClient.get('https://localhost:8000/books').subscribe(response => {
    //   this.books = response;
    //   console.log(this.books);
    // });

    this.responsiveOptions = [
        {
         breakpoint: '1024px',
         numVisible: 3,
         numScroll: 3
       },
       {
         breakpoint: '768px',
         numVisible: 2,
         numScroll: 2
       },
       {
         breakpoint: '560px',
         numVisible: 1,
         numScroll: 1
       }
     ];
  }

  ngOnInit(): void {
    /* EJEMPLO DE LA PAGINA WEB DE PRIMENG, LLAMAR A UNA FUNCION DEL SERVICE Y TRABAJAR CON LO QUE NOS DEVUELVE */
    // this.BooksService.nameFunctionHere().then(books => {
    //   this.books/*(Variable declarada)*/= books /*(Argumento dentro del "then")*/;
    // });
  }

}
