import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SaturnoComponent } from './saturno.component';

describe('SaturnoComponent', () => {
  let component: SaturnoComponent;
  let fixture: ComponentFixture<SaturnoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SaturnoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(SaturnoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
