import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { GenresViewComponent } from './genres-view/genres-view.component';
import { HomeViewComponent } from './home-view/home-view.component';
import { NewandpopularViewComponent } from './newandpopular-view/newandpopular-view.component';
import { MybookshelfViewComponent } from './mybookshelf-view/mybookshelf-view.component';
import { LoginViewComponent } from './login-view/login-view.component';
import { RegisterViewComponent } from './register-view/register-view.component';
import { PublishViewComponent } from './publish-view/publish-view.component';
import { AdminViewComponent } from './admin-view/admin-view.component';
import { PageNotFoundViewComponent } from './page-not-found-view/page-not-found-view.component';
import { ContactViewComponent } from './contact-view/contact-view.component';
import { SiteLayoutComponent } from './_layout/site-layout/site-layout.component';
import { SearchResultsViewComponent } from './search-results-view/search-results-view.component';

const routes: Routes = [
  { path: 'login', component: LoginViewComponent },
  { path: 'register', component: RegisterViewComponent },
  { path: '', component: SiteLayoutComponent,
  children: [
    { path: '', component: HomeViewComponent, pathMatch: 'full' },
    { path: 'genres', component: GenresViewComponent },
    { path: 'newpopular', component: NewandpopularViewComponent },
    { path: 'mybookshelf', component: MybookshelfViewComponent },
    { path: 'publish', component: PublishViewComponent },
    { path: 'admin', component: AdminViewComponent },
    { path: 'contact', component: ContactViewComponent },
    { path: 'results/:word', component: SearchResultsViewComponent },
  ]
},
{ path: '**', component: PageNotFoundViewComponent },
  // { path: 'home', component: HomeViewComponent },
  // { path: 'genres', component: GenresViewComponent },
  // { path: 'new&popular', component: NewandpopularViewComponent },
  // { path: 'mybookshelf', component: MybookshelfViewComponent },
  // { path: 'publish', component: PublishViewComponent },
  // { path: 'admin', component: AdminViewComponent },
  // { path: 'contact', component: ContactViewComponent },
];

export const routing = RouterModule.forRoot(routes);

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
