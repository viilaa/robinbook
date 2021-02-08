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

const routes: Routes = [
  { path: 'home', component: HomeViewComponent },
  { path: 'genres', component: GenresViewComponent },
  { path: 'new&popular', component: NewandpopularViewComponent },
  { path: 'mybookshelf', component: MybookshelfViewComponent },
  { path: '', component: LoginViewComponent },
  { path: 'register', component: RegisterViewComponent },
  { path: 'publish', component: PublishViewComponent },
  { path: 'admin', component: AdminViewComponent },
  { path: '**', component: AdminViewComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
