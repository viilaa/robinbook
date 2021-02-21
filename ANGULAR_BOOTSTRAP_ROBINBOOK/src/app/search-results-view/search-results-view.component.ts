import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-search-results-view',
  templateUrl: './search-results-view.component.html',
  styleUrls: ['./search-results-view.component.css']
})
export class SearchResultsViewComponent implements OnInit {

  results = <any>[];
  word:any;

  constructor(private httpClient: HttpClient, private _route: ActivatedRoute) { }

  ngOnInit(): void {
    this._route.paramMap.subscribe(params => {
      this.word = params.get('word');
      this.httpClient.get<any>("https://localhost:8000/findBooks/" + this.word).subscribe((response: any) => {
        console.log(response);
        this.results = response;
      });
    });
  }

}
