import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MercurioComponent } from './mercurio.component';

describe('MercurioComponent', () => {
  let component: MercurioComponent;
  let fixture: ComponentFixture<MercurioComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MercurioComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MercurioComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
