import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DatosRandomComponent } from './datos-random.component';

describe('DatosRandomComponent', () => {
  let component: DatosRandomComponent;
  let fixture: ComponentFixture<DatosRandomComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ DatosRandomComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(DatosRandomComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
