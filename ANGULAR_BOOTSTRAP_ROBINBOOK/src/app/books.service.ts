import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Book } from './book';

@Injectable({
  providedIn: 'root'
})
export class BooksService {

  constructor(private http: HttpClient) { }

  /* Escribir todas las funciones que se vayan a utilizar
  obtener datos de la bbdd.
  
  EJ: getBookById(),
      getBooksByGenre(),
      uploadBook(),
      publishBook()*/
}
