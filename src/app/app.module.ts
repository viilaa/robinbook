import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeViewComponent } from './home-view/home-view.component';
import { GenresViewComponent } from './genres-view/genres-view.component';
import { NewandpopularViewComponent } from './newandpopular-view/newandpopular-view.component';
import { MybookshelfViewComponent } from './mybookshelf-view/mybookshelf-view.component';
import { LoginViewComponent } from './login-view/login-view.component';
import { RegisterViewComponent } from './register-view/register-view.component';
import { PublishViewComponent } from './publish-view/publish-view.component';
import { AdminViewComponent } from './admin-view/admin-view.component';
import { PageNotFoundViewComponent } from './page-not-found-view/page-not-found-view.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeViewComponent,
    GenresViewComponent,
    NewandpopularViewComponent,
    MybookshelfViewComponent,
    LoginViewComponent,
    RegisterViewComponent,
    PublishViewComponent,
    AdminViewComponent,
    PageNotFoundViewComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
