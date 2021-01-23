import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OtrosCuerposComponent } from './otros-cuerpos.component';

describe('OtrosCuerposComponent', () => {
  let component: OtrosCuerposComponent;
  let fixture: ComponentFixture<OtrosCuerposComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ OtrosCuerposComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(OtrosCuerposComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
