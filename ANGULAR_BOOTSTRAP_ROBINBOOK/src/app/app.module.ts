import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { CarouselModule } from 'primeng/carousel';
import { ButtonModule } from 'primeng/button';
import { FieldsetModule } from 'primeng/fieldset';
import { InputTextModule } from 'primeng/inputtext';
import { PasswordModule } from 'primeng/password';
import { CheckboxModule } from 'primeng/checkbox';
import { InputMaskModule } from 'primeng/inputmask';

import { HttpClientModule } from '@angular/common/http';

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
import { ContactViewComponent } from './contact-view/contact-view.component';
import { LayoutViewComponent } from './layout-view/layout-view.component';
import { SiteHeaderComponent } from './_layout/site-header/site-header.component';
import { SiteFooterComponent } from './_layout/site-footer/site-footer.component';
import { SiteLayoutComponent } from './_layout/site-layout/site-layout.component';

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
    ContactViewComponent,
    LayoutViewComponent,
    SiteHeaderComponent,
    SiteFooterComponent,
    SiteLayoutComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CarouselModule,
    ButtonModule,
    FieldsetModule,
    InputTextModule,
    PasswordModule,
    CheckboxModule,
    InputMaskModule,
    HttpClientModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
