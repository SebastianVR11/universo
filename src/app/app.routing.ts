import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PrincipalComponent } from './principal/principal.component';
import { MercurioComponent } from './planetas/mercurio/mercurio.component';
import { VenusComponent } from './planetas/venus/venus.component';
import { MarteComponent } from './planetas/marte/marte.component';
import { JupiterComponent } from './planetas/jupiter/jupiter.component';
import { SaturnoComponent } from './planetas/saturno/saturno.component';
import { UranoComponent } from './planetas/urano/urano.component';
import { NeptunoComponent } from './planetas/neptuno/neptuno.component';

import { LaLunaComponent } from './lunas-estrellas/la-luna/la-luna.component';
import { ElSolComponent } from './lunas-estrellas/el-sol/el-sol.component';

import { OtrosCuerposComponent } from './demas/otros-cuerpos/otros-cuerpos.component';
import { ImagenesComponent } from './demas/imagenes/imagenes.component';
import { DatosRandomComponent } from './demas/datos-random/datos-random.component';

const appRoutes: Routes = [
    {path: '', component: PrincipalComponent},
    {path: 'Mercurio', component: MercurioComponent},
    {path: 'Venus', component: VenusComponent},
    {path: 'Marte', component: MarteComponent},
    {path: 'Jupiter', component: JupiterComponent},
    {path: 'Saturno', component: SaturnoComponent},
    {path: 'Urano', component: UranoComponent},
    {path: 'Neptuno', component: NeptunoComponent},

    {path: 'La Luna', component: LaLunaComponent},
    {path: 'El Sol', component: ElSolComponent},

    {path: 'Otros Cuerpos', component: OtrosCuerposComponent},
    {path: 'Imagenes', component: ImagenesComponent},
    {path: 'Datos Random', component: DatosRandomComponent},
    {path: '**', component: PrincipalComponent}
];

export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders<any> = RouterModule.forRoot(appRoutes);
