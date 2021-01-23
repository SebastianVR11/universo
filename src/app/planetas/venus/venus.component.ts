import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-venus',
  templateUrl: './venus.component.html',
  styleUrls: ['./venus.component.css']
})
export class VenusComponent implements OnInit {

    

    constructor() { }

    ngOnInit(): void {
        const botonVenus = document.querySelector(".venus");
        const cerrarVenus = document.querySelector("#cerrarVenus");
        const infoVenus = document.querySelector("#infoVenus");

        botonVenus.addEventListener("click", ()=>{
            if(document.querySelector("#infoVenus.no-ver")){
                infoVenus.classList.remove("no-ver");
                infoVenus.classList.add("si-ver");
            } 
        });

        cerrarVenus.addEventListener("click", ()=>{
            if(document.querySelector("#infoVenus.si-ver")){
                infoVenus.classList.remove("si-ver");
                infoVenus.classList.add("no-ver");
            }
        });
    }

}
