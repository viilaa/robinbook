import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeViewComponent } from './home-view/home-view.component';
import { GenresViewComponent } from './genres-view/genres-view.component';
import { NewandpopularViewComponent } from './newandpopular-view/newandpopular-view.component';
import { MybookshelfViewComponent } from './mybookshelf-view/mybookshelf-view.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeViewComponent,
    GenresViewComponent,
    NewandpopularViewComponent,
    MybookshelfViewComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
