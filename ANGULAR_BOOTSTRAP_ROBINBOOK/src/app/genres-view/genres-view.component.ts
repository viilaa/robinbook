import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-genres-view',
  templateUrl: './genres-view.component.html',
  styleUrls: ['./genres-view.component.css']
})
export class GenresViewComponent implements OnInit {

  genres= <any>[];
  selectedGenre:any;

  booksAdventure = <any>[];
  booksScienceFiction = <any>[];
  booksFantasy = <any>[];
  booksErotic = <any>[];
  booksRomance = <any>[];
  booksPolice = <any>[];
  booksTerror = <any>[];
  responsiveOptions: any;

  constructor(private httpClient: HttpClient) { 
    this.genres = [
      { name: 'Genres'},
      { name: 'Adventure'},
      { name: 'Science-Fiction'},
      { name: 'Fantasy'},
      { name: 'Erotic'},
      { name: 'Romance'},
      { name: 'Police'},
      { name: 'Terror'}
    ];

    this.httpClient.get('https://localhost:8000/findGenres/1').subscribe(response => {
      this.booksAdventure = response;
      // this.books.cover_page= IMG_BASE_URL + this.books.cover_page;
      console.log(this.booksAdventure);
    });
    this.httpClient.get('https://localhost:8000/findGenres/2').subscribe(response => {
      this.booksScienceFiction = response;
    });
    this.httpClient.get('https://localhost:8000/findGenres/3').subscribe(response => {
      this.booksFantasy = response;
    });
    this.httpClient.get('https://localhost:8000/findGenres/4').subscribe(response => {
      this.booksErotic = response;
    });
    this.httpClient.get('https://localhost:8000/findGenres/5').subscribe(response => {
      this.booksRomance = response;
    });
    this.httpClient.get('https://localhost:8000/findGenres/6').subscribe(response => {
      this.booksPolice = response;
    });
    this.httpClient.get('https://localhost:8000/findGenres/7').subscribe(response => {
      this.booksTerror = response;
    });

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
  }

}
