import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { routing, appRoutingProviders } from './app.routing';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PrincipalComponent } from './principal/principal.component';
import { MercurioComponent } from './planetas/mercurio/mercurio.component';
import { HomeComponent } from './home/home.component';
import { VenusComponent } from './planetas/venus/venus.component';
import { MarteComponent } from './planetas/marte/marte.component';
import { JupiterComponent } from './planetas/jupiter/jupiter.component';
import { SaturnoComponent } from './planetas/saturno/saturno.component';
import { UranoComponent } from './planetas/urano/urano.component';
import { NeptunoComponent } from './planetas/neptuno/neptuno.component';
import { LaLunaComponent } from './lunas-estrellas/la-luna/la-luna.component';
import { ElSolComponent } from './lunas-estrellas/el-sol/el-sol.component';
import { ImagenesComponent } from './demas/imagenes/imagenes.component';
import { DatosRandomComponent } from './demas/datos-random/datos-random.component';
import { OtrosCuerposComponent } from './demas/otros-cuerpos/otros-cuerpos.component';

@NgModule({
  declarations: [
    AppComponent,
    PrincipalComponent,
    MercurioComponent,
    HomeComponent,
    VenusComponent,
    MarteComponent,
    JupiterComponent,
    SaturnoComponent,
    UranoComponent,
    NeptunoComponent,
    LaLunaComponent,
    ElSolComponent,
    ImagenesComponent,
    DatosRandomComponent,
    OtrosCuerposComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    routing
  ],
  providers: [
    appRoutingProviders
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
