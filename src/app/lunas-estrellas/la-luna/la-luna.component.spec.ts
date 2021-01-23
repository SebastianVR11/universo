import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LaLunaComponent } from './la-luna.component';

describe('LaLunaComponent', () => {
  let component: LaLunaComponent;
  let fixture: ComponentFixture<LaLunaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LaLunaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(LaLunaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
