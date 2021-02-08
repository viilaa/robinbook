import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NewandpopularViewComponent } from './newandpopular-view.component';

describe('NewandpopularViewComponent', () => {
  let component: NewandpopularViewComponent;
  let fixture: ComponentFixture<NewandpopularViewComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ NewandpopularViewComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(NewandpopularViewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
