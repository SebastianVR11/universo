import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UranoComponent } from './urano.component';

describe('UranoComponent', () => {
  let component: UranoComponent;
  let fixture: ComponentFixture<UranoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ UranoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(UranoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
