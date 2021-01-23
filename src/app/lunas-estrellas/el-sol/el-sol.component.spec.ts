import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ElSolComponent } from './el-sol.component';

describe('ElSolComponent', () => {
  let component: ElSolComponent;
  let fixture: ComponentFixture<ElSolComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ElSolComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ElSolComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
