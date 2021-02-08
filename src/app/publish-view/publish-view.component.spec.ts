import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PublishViewComponent } from './publish-view.component';

describe('PublishViewComponent', () => {
  let component: PublishViewComponent;
  let fixture: ComponentFixture<PublishViewComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PublishViewComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(PublishViewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
