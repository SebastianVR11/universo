import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NeptunoComponent } from './neptuno.component';

describe('NeptunoComponent', () => {
  let component: NeptunoComponent;
  let fixture: ComponentFixture<NeptunoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ NeptunoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(NeptunoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
