import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MybookshelfViewComponent } from './mybookshelf-view.component';

describe('MybookshelfViewComponent', () => {
  let component: MybookshelfViewComponent;
  let fixture: ComponentFixture<MybookshelfViewComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MybookshelfViewComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MybookshelfViewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
